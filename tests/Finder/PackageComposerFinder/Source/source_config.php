<?php

declare (strict_types=1);
namespace _PhpScoper905a278e297d;

use _PhpScoper905a278e297d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper905a278e297d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\MonorepoBuilder\ValueObject\Option::PACKAGE_DIRECTORIES, ['%kernel.project_dir%/tests/Finder/PackageComposerFinder/Source']);
    $parameters->set(\Symplify\MonorepoBuilder\ValueObject\Option::PACKAGE_DIRECTORIES_EXCLUDES, ['ExcludeThis']);
};
