<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\ReleaseWorker;

use _PhpScopera89333f3e9e2\PharIo\Version\Version;
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
    public function work(\_PhpScopera89333f3e9e2\PharIo\Version\Version $version) : void
    {
        $this->processRunner->run('git push --tags');
    }
    public function getDescription(\_PhpScopera89333f3e9e2\PharIo\Version\Version $version) : string
    {
        return \sprintf('Push "%s" tag to remote repository', $version->getVersionString());
    }
}
