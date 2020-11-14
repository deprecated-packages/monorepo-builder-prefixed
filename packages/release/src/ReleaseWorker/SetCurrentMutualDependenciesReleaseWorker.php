<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Release\ReleaseWorker;

use _PhpScoperae7532b8c744\PharIo\Version\Version;
final class SetCurrentMutualDependenciesReleaseWorker extends \Symplify\MonorepoBuilder\Release\ReleaseWorker\AbstractMutualDependencyReleaseWorker
{
    public function work(\_PhpScoperae7532b8c744\PharIo\Version\Version $version) : void
    {
        $versionInString = $this->versionUtils->getRequiredFormat($version);
        $this->dependencyUpdater->updateFileInfosWithPackagesAndVersion($this->composerJsonProvider->getPackagesComposerFileInfos(), $this->packageNamesProvider->provide(), $versionInString);
    }
    public function getDescription(\_PhpScoperae7532b8c744\PharIo\Version\Version $version) : string
    {
        $versionInString = $this->versionUtils->getRequiredFormat($version);
        return \sprintf('Set packages mutual dependencies to "%s" version', $versionInString);
    }
}
