<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\Process;

use _PhpScopera2f1d1d42b88\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopera2f1d1d42b88\Symfony\Component\Process\Exception\ProcessFailedException;
use _PhpScopera2f1d1d42b88\Symfony\Component\Process\Process;
final class ProcessRunner
{
    /**
     * Reasonable timeout to report hang off: 10 minutes
     * @var float
     */
    private const TIMEOUT = 10 * 60.0;
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    public function __construct(\_PhpScopera2f1d1d42b88\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle)
    {
        $this->symfonyStyle = $symfonyStyle;
    }
    /**
     * @param string|string[] $commandLine
     */
    public function run($commandLine) : string
    {
        if ($this->symfonyStyle->isVerbose()) {
            $this->symfonyStyle->note('Running process: ' . $this->normalizeToString($commandLine));
        }
        $process = $this->createProcess($commandLine);
        $process->run();
        $this->reportResult($process);
        return $process->getOutput();
    }
    /**
     * @param string|string[] $content
     */
    private function normalizeToString($content) : string
    {
        if (\is_array($content)) {
            return \implode(' ', $content);
        }
        return $content;
    }
    /**
     * @param string|string[] $commandLine
     */
    private function createProcess($commandLine) : \_PhpScopera2f1d1d42b88\Symfony\Component\Process\Process
    {
        // @since Symfony 4.2: https://github.com/symfony/symfony/pull/27821
        if (\is_string($commandLine) && \method_exists(\_PhpScopera2f1d1d42b88\Symfony\Component\Process\Process::class, 'fromShellCommandline')) {
            return \_PhpScopera2f1d1d42b88\Symfony\Component\Process\Process::fromShellCommandline($commandLine, null, null, null, self::TIMEOUT);
        }
        return new \_PhpScopera2f1d1d42b88\Symfony\Component\Process\Process($commandLine, null, null, null, self::TIMEOUT);
    }
    private function reportResult(\_PhpScopera2f1d1d42b88\Symfony\Component\Process\Process $process) : void
    {
        if ($process->isSuccessful()) {
            return;
        }
        throw new \_PhpScopera2f1d1d42b88\Symfony\Component\Process\Exception\ProcessFailedException($process);
    }
}
