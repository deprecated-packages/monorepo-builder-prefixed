<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\ReleaseWorker;

use _PhpScoper55b61aca61e8\PharIo\Version\Version;
use Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker\ReleaseWorkerInterface;
use Symplify\MonorepoBuilder\Release\Process\ProcessRunner;
final class PushTagReleaseWorker implements \Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker\ReleaseWorkerInterface
{
    /**
     * @var ProcessRunner
     */
    private $processRunner;
    public function __construct(\Symplify\MonorepoBuilder\Release\Process\ProcessRunner $processRunner)
    {
        $this->processRunner = $processRunner;
    }
    public function work(\_PhpScoper55b61aca61e8\PharIo\Version\Version $version) : void
    {
        $this->processRunner->run('git push --tags');
    }
    public function getDescription(\_PhpScoper55b61aca61e8\PharIo\Version\Version $version) : string
    {
        return \sprintf('Push "%s" tag to remote repository', $version->getVersionString());
    }
}
