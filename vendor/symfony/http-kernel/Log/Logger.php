<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper46d05083fbc3\Symfony\Component\HttpKernel\Log;

use _PhpScoper46d05083fbc3\Psr\Log\AbstractLogger;
use _PhpScoper46d05083fbc3\Psr\Log\InvalidArgumentException;
use _PhpScoper46d05083fbc3\Psr\Log\LogLevel;
/**
 * Minimalist PSR-3 logger designed to write in stderr or any other stream.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Logger extends \_PhpScoper46d05083fbc3\Psr\Log\AbstractLogger
{
    private static $levels = [\_PhpScoper46d05083fbc3\Psr\Log\LogLevel::DEBUG => 0, \_PhpScoper46d05083fbc3\Psr\Log\LogLevel::INFO => 1, \_PhpScoper46d05083fbc3\Psr\Log\LogLevel::NOTICE => 2, \_PhpScoper46d05083fbc3\Psr\Log\LogLevel::WARNING => 3, \_PhpScoper46d05083fbc3\Psr\Log\LogLevel::ERROR => 4, \_PhpScoper46d05083fbc3\Psr\Log\LogLevel::CRITICAL => 5, \_PhpScoper46d05083fbc3\Psr\Log\LogLevel::ALERT => 6, \_PhpScoper46d05083fbc3\Psr\Log\LogLevel::EMERGENCY => 7];
    private $minLevelIndex;
    private $formatter;
    private $handle;
    public function __construct(string $minLevel = null, $output = 'php://stderr', callable $formatter = null)
    {
        if (null === $minLevel) {
            $minLevel = 'php://stdout' === $output || 'php://stderr' === $output ? \_PhpScoper46d05083fbc3\Psr\Log\LogLevel::CRITICAL : \_PhpScoper46d05083fbc3\Psr\Log\LogLevel::WARNING;
            if (isset($_ENV['SHELL_VERBOSITY']) || isset($_SERVER['SHELL_VERBOSITY'])) {
                switch ((int) (isset($_ENV['SHELL_VERBOSITY']) ? $_ENV['SHELL_VERBOSITY'] : $_SERVER['SHELL_VERBOSITY'])) {
                    case -1:
                        $minLevel = \_PhpScoper46d05083fbc3\Psr\Log\LogLevel::ERROR;
                        break;
                    case 1:
                        $minLevel = \_PhpScoper46d05083fbc3\Psr\Log\LogLevel::NOTICE;
                        break;
                    case 2:
                        $minLevel = \_PhpScoper46d05083fbc3\Psr\Log\LogLevel::INFO;
                        break;
                    case 3:
                        $minLevel = \_PhpScoper46d05083fbc3\Psr\Log\LogLevel::DEBUG;
                        break;
                }
            }
        }
        if (!isset(self::$levels[$minLevel])) {
            throw new \_PhpScoper46d05083fbc3\Psr\Log\InvalidArgumentException(\sprintf('The log level "%s" does not exist.', $minLevel));
        }
        $this->minLevelIndex = self::$levels[$minLevel];
        $this->formatter = $formatter ?: [$this, 'format'];
        if (\false === ($this->handle = \is_resource($output) ? $output : @\fopen($output, 'a'))) {
            throw new \_PhpScoper46d05083fbc3\Psr\Log\InvalidArgumentException(\sprintf('Unable to open "%s".', $output));
        }
    }
    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function log($level, $message, array $context = [])
    {
        if (!isset(self::$levels[$level])) {
            throw new \_PhpScoper46d05083fbc3\Psr\Log\InvalidArgumentException(\sprintf('The log level "%s" does not exist.', $level));
        }
        if (self::$levels[$level] < $this->minLevelIndex) {
            return;
        }
        $formatter = $this->formatter;
        \fwrite($this->handle, $formatter($level, $message, $context));
    }
    private function format(string $level, string $message, array $context) : string
    {
        if (\false !== \strpos($message, '{')) {
            $replacements = [];
            foreach ($context as $key => $val) {
                if (null === $val || \is_scalar($val) || \is_object($val) && \method_exists($val, '__toString')) {
                    $replacements["{{$key}}"] = $val;
                } elseif ($val instanceof \DateTimeInterface) {
                    $replacements["{{$key}}"] = $val->format(\DateTime::RFC3339);
                } elseif (\is_object($val)) {
                    $replacements["{{$key}}"] = '[object ' . \get_class($val) . ']';
                } else {
                    $replacements["{{$key}}"] = '[' . \gettype($val) . ']';
                }
            }
            $message = \strtr($message, $replacements);
        }
        return \sprintf('%s [%s] %s', \date(\DateTime::RFC3339), $level, $message) . \PHP_EOL;
    }
}
