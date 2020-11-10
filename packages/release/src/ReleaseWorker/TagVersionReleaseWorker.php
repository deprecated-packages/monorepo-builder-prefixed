<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\ReleaseWorker;

use _PhpScopera31d0d6ff47a\PharIo\Version\Version;
use Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker\ReleaseWorkerInterface;
use Symplify\MonorepoBuilder\Release\Process\ProcessRunner;
use Throwable;
final class TagVersionReleaseWorker implements \Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker\ReleaseWorkerInterface
{
    /**
     * @var ProcessRunner
     */
    private $processRunner;
    public function __construct(\Symplify\MonorepoBuilder\Release\Process\ProcessRunner $processRunner)
    {
        $this->processRunner = $processRunner;
    }
    public function work(\_PhpScopera31d0d6ff47a\PharIo\Version\Version $version) : void
    {
        try {
            $this->processRunner->run('git add . && git commit -m "prepare release" && git push origin master');
        } catch (\Throwable $throwable) {
            // nothing to commit
        }
        $this->processRunner->run('git tag ' . $version->getVersionString());
    }
    public function getDescription(\_PhpScopera31d0d6ff47a\PharIo\Version\Version $version) : string
    {
        return \sprintf('Add local tag "%s"', $version->getVersionString());
    }
}
