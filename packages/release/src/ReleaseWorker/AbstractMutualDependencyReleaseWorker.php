<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\ReleaseWorker;

use Symplify\MonorepoBuilder\DependencyUpdater;
use Symplify\MonorepoBuilder\FileSystem\ComposerJsonProvider;
use Symplify\MonorepoBuilder\Package\PackageNamesProvider;
use Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker\ReleaseWorkerInterface;
use Symplify\MonorepoBuilder\Utils\VersionUtils;
abstract class AbstractMutualDependencyReleaseWorker implements \Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker\ReleaseWorkerInterface
{
    /**
     * @var ComposerJsonProvider
     */
    protected $composerJsonProvider;
    /**
     * @var DependencyUpdater
     */
    protected $dependencyUpdater;
    /**
     * @var VersionUtils
     */
    protected $versionUtils;
    /**
     * @var PackageNamesProvider
     */
    protected $packageNamesProvider;
    public function __construct(\Symplify\MonorepoBuilder\FileSystem\ComposerJsonProvider $composerJsonProvider, \Symplify\MonorepoBuilder\DependencyUpdater $dependencyUpdater, \Symplify\MonorepoBuilder\Package\PackageNamesProvider $packageNamesProvider, \Symplify\MonorepoBuilder\Utils\VersionUtils $versionUtils)
    {
        $this->composerJsonProvider = $composerJsonProvider;
        $this->dependencyUpdater = $dependencyUpdater;
        $this->versionUtils = $versionUtils;
        $this->packageNamesProvider = $packageNamesProvider;
    }
}
