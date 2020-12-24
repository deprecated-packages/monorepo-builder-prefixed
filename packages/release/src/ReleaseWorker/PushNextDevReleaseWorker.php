<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\ReleaseWorker;

use _PhpScoperf237fc62366a\PharIo\Version\Version;
use Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker\ReleaseWorkerInterface;
use Symplify\MonorepoBuilder\Release\Process\ProcessRunner;
use Symplify\MonorepoBuilder\Utils\VersionUtils;
final class PushNextDevReleaseWorker implements \Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker\ReleaseWorkerInterface
{
    /**
     * @var ProcessRunner
     */
    private $processRunner;
    /**
     * @var VersionUtils
     */
    private $versionUtils;
    public function __construct(\Symplify\MonorepoBuilder\Release\Process\ProcessRunner $processRunner, \Symplify\MonorepoBuilder\Utils\VersionUtils $versionUtils)
    {
        $this->processRunner = $processRunner;
        $this->versionUtils = $versionUtils;
    }
    public function work(\_PhpScoperf237fc62366a\PharIo\Version\Version $version) : void
    {
        $versionInString = $this->getVersionDev($version);
        $gitAddCommitCommand = \sprintf('git add . && git commit --allow-empty -m "open %s" && git push origin master', $versionInString);
        $this->processRunner->run($gitAddCommitCommand);
    }
    public function getDescription(\_PhpScoperf237fc62366a\PharIo\Version\Version $version) : string
    {
        $versionInString = $this->getVersionDev($version);
        return \sprintf('Push "%s" open to remote repository', $versionInString);
    }
    private function getVersionDev(\_PhpScoperf237fc62366a\PharIo\Version\Version $version) : string
    {
        return $this->versionUtils->getNextAliasFormat($version);
    }
}
