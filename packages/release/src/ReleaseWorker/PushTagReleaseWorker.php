<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\ReleaseWorker;

use _PhpScoperdd624bbcb4e5\PharIo\Version\Version;
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
    public function work(\_PhpScoperdd624bbcb4e5\PharIo\Version\Version $version) : void
    {
        $this->processRunner->run('git push --tags');
    }
    public function getDescription(\_PhpScoperdd624bbcb4e5\PharIo\Version\Version $version) : string
    {
        return \sprintf('Push "%s" tag to remote repository', $version->getVersionString());
    }
}
