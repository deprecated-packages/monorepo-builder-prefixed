<?php

declare (strict_types=1);
namespace _PhpScoper5da899d87662;

use _PhpScoper5da899d87662\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\AddTagToChangelogReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\PushNextDevReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\PushTagReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\SetCurrentMutualDependenciesReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\SetNextMutualDependenciesReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\TagVersionReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\UpdateBranchAliasReleaseWorker;
return static function (\_PhpScoper5da899d87662\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\Symplify\MonorepoBuilder\Release\ReleaseWorker\SetCurrentMutualDependenciesReleaseWorker::class);
    $services->set(\Symplify\MonorepoBuilder\Release\ReleaseWorker\AddTagToChangelogReleaseWorker::class);
    $services->set(\Symplify\MonorepoBuilder\Release\ReleaseWorker\TagVersionReleaseWorker::class);
    $services->set(\Symplify\MonorepoBuilder\Release\ReleaseWorker\PushTagReleaseWorker::class);
    $services->set(\Symplify\MonorepoBuilder\Release\ReleaseWorker\SetNextMutualDependenciesReleaseWorker::class);
    $services->set(\Symplify\MonorepoBuilder\Release\ReleaseWorker\UpdateBranchAliasReleaseWorker::class);
    $services->set(\Symplify\MonorepoBuilder\Release\ReleaseWorker\PushNextDevReleaseWorker::class);
};
