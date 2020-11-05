<?php

declare (strict_types=1);
namespace _PhpScoperfd1a6a0ee9af;

use _PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MonorepoBuilder\ValueObject\Option;
return static function (\_PhpScoperfd1a6a0ee9af\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\MonorepoBuilder\ValueObject\Option::IS_STAGE_REQUIRED, \false);
    $parameters->set(\Symplify\MonorepoBuilder\ValueObject\Option::STAGES_TO_ALLOW_EXISTING_TAG, []);
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\MonorepoBuilder\\Release\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Exception', __DIR__ . '/../src/ReleaseWorker']);
};
