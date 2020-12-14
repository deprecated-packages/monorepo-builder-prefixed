<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Process;

use _PhpScoperc9dee8f3b3e7\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoperc9dee8f3b3e7\Symfony\Component\Process\Process;
final class ProcessRunner
{
    /**
     * @param string[] $command
     */
    public function createAndRun(array $command, string $cwd, \_PhpScoperc9dee8f3b3e7\Symfony\Component\Console\Output\OutputInterface $output) : void
    {
        $process = new \_PhpScoperc9dee8f3b3e7\Symfony\Component\Process\Process($command, $cwd, null, null, null);
        $process->mustRun(static function (string $type, string $buffer) use($output) : void {
            $output->write($buffer);
        });
    }
}
