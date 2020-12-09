<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Process;

use _PhpScopera85504f0ea7b\Symfony\Component\Console\Output\OutputInterface;
use _PhpScopera85504f0ea7b\Symfony\Component\Process\Process;
final class ProcessRunner
{
    /**
     * @param string[] $command
     */
    public function createAndRun(array $command, string $cwd, \_PhpScopera85504f0ea7b\Symfony\Component\Console\Output\OutputInterface $output) : void
    {
        $process = new \_PhpScopera85504f0ea7b\Symfony\Component\Process\Process($command, $cwd, null, null, null);
        $process->mustRun(static function (string $type, string $buffer) use($output) : void {
            $output->write($buffer);
        });
    }
}
