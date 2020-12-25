<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Process;

use _PhpScoper95e170f0b4ac\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoper95e170f0b4ac\Symfony\Component\Process\Process;
final class ProcessRunner
{
    /**
     * @param string[] $command
     */
    public function createAndRun(array $command, string $cwd, \_PhpScoper95e170f0b4ac\Symfony\Component\Console\Output\OutputInterface $output) : void
    {
        $process = new \_PhpScoper95e170f0b4ac\Symfony\Component\Process\Process($command, $cwd, null, null, null);
        $process->mustRun(static function (string $type, string $buffer) use($output) : void {
            $output->write($buffer);
        });
    }
}
