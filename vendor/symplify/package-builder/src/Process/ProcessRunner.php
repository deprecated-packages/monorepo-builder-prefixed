<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Process;

use _PhpScoperbc89827b806f\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoperbc89827b806f\Symfony\Component\Process\Process;
final class ProcessRunner
{
    /**
     * @param string[] $command
     */
    public function createAndRun(array $command, string $cwd, \_PhpScoperbc89827b806f\Symfony\Component\Console\Output\OutputInterface $output) : void
    {
        $process = new \_PhpScoperbc89827b806f\Symfony\Component\Process\Process($command, $cwd, null, null, null);
        $process->mustRun(static function (string $type, string $buffer) use($output) : void {
            $output->write($buffer);
        });
    }
}
