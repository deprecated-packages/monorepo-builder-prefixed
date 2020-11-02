<?php

declare (strict_types=1);
namespace _PhpScopere809b8269e19;

use _PhpScopere809b8269e19\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere809b8269e19\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\MonorepoBuilder\ValueObject\Option::PACKAGE_DIRECTORIES, ['%kernel.project_dir%/tests/Finder/PackageComposerFinder/Source']);
    $parameters->set(\Symplify\MonorepoBuilder\ValueObject\Option::PACKAGE_DIRECTORIES_EXCLUDES, ['ExcludeThis']);
};
