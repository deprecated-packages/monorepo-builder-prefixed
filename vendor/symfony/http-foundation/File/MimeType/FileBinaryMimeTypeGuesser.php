<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper9aa6186049d8\Symfony\Component\HttpFoundation\File\MimeType;

use _PhpScoper9aa6186049d8\Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;
use _PhpScoper9aa6186049d8\Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;
use _PhpScoper9aa6186049d8\Symfony\Component\Mime\FileBinaryMimeTypeGuesser as NewFileBinaryMimeTypeGuesser;
@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.3, use "%s" instead.', \_PhpScoper9aa6186049d8\Symfony\Component\HttpFoundation\File\MimeType\FileBinaryMimeTypeGuesser::class, \_PhpScoper9aa6186049d8\Symfony\Component\Mime\FileBinaryMimeTypeGuesser::class), \E_USER_DEPRECATED);
/**
 * Guesses the mime type with the binary "file" (only available on *nix).
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since Symfony 4.3, use {@link NewFileBinaryMimeTypeGuesser} instead
 */
class FileBinaryMimeTypeGuesser implements \_PhpScoper9aa6186049d8\Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface
{
    private $cmd;
    /**
     * The $cmd pattern must contain a "%s" string that will be replaced
     * with the file name to guess.
     *
     * The command output must start with the mime type of the file.
     *
     * @param string $cmd The command to run to get the mime type of a file
     */
    public function __construct(string $cmd = 'file -b --mime -- %s 2>/dev/null')
    {
        $this->cmd = $cmd;
    }
    /**
     * Returns whether this guesser is supported on the current OS.
     *
     * @return bool
     */
    public static function isSupported()
    {
        static $supported = null;
        if (null !== $supported) {
            return $supported;
        }
        if ('\\' === \DIRECTORY_SEPARATOR || !\function_exists('passthru') || !\function_exists('escapeshellarg')) {
            return $supported = \false;
        }
        \ob_start();
        \passthru('command -v file', $exitStatus);
        $binPath = \trim(\ob_get_clean());
        return $supported = 0 === $exitStatus && '' !== $binPath;
    }
    /**
     * {@inheritdoc}
     */
    public function guess($path)
    {
        if (!\is_file($path)) {
            throw new \_PhpScoper9aa6186049d8\Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException($path);
        }
        if (!\is_readable($path)) {
            throw new \_PhpScoper9aa6186049d8\Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException($path);
        }
        if (!self::isSupported()) {
            return null;
        }
        \ob_start();
        // need to use --mime instead of -i. see #6641
        \passthru(\sprintf($this->cmd, \escapeshellarg((0 === \strpos($path, '-') ? './' : '') . $path)), $return);
        if ($return > 0) {
            \ob_end_clean();
            return null;
        }
        $type = \trim(\ob_get_clean());
        if (!\preg_match('#^([a-z0-9\\-]+/[a-z0-9\\-\\+\\.]+)#i', $type, $match)) {
            // it's not a type, but an error message
            return null;
        }
        return $match[1];
    }
}
