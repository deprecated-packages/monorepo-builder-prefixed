<?php

declare (strict_types=1);
namespace _PhpScoperfa8ac9431c57;

use _PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\MonorepoBuilder\ValueObject\Option::PACKAGE_DIRECTORIES, ['%kernel.project_dir%/tests/Finder/PackageComposerFinder/Source']);
    $parameters->set(\Symplify\MonorepoBuilder\ValueObject\Option::PACKAGE_DIRECTORIES_EXCLUDES, ['ExcludeThis']);
};
