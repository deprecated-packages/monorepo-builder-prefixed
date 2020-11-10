<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Process;

use _PhpScopera2bd9a9af620\Symfony\Component\Console\Output\OutputInterface;
use _PhpScopera2bd9a9af620\Symfony\Component\Process\Process;
final class ProcessRunner
{
    /**
     * @param string[] $command
     */
    public function createAndRun(array $command, string $cwd, \_PhpScopera2bd9a9af620\Symfony\Component\Console\Output\OutputInterface $output) : void
    {
        $process = new \_PhpScopera2bd9a9af620\Symfony\Component\Process\Process($command, $cwd, null, null, null);
        $process->mustRun(static function (string $type, string $buffer) use($output) : void {
            $output->write($buffer);
        });
    }
}
