<?php

declare (strict_types=1);
namespace _PhpScopere10afbb60721;

use _PhpScopere10afbb60721\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere10afbb60721\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\MonorepoBuilder\ValueObject\Option::PACKAGE_DIRECTORIES, ['%kernel.project_dir%/tests/Finder/PackageComposerFinder/Source']);
    $parameters->set(\Symplify\MonorepoBuilder\ValueObject\Option::PACKAGE_DIRECTORIES_EXCLUDES, ['ExcludeThis']);
};
