<?php

declare (strict_types=1);
namespace _PhpScoper955845c5b45f;

use _PhpScoper955845c5b45f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MonorepoBuilder\ValueObject\Option;
return static function (\_PhpScoper955845c5b45f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\MonorepoBuilder\ValueObject\Option::DATA_TO_APPEND, ['require-dev' => ['phpstan/phpstan' => '^0.9', 'tracy/tracy' => '^2.4', 'slam/php-cs-fixer-extensions' => '^1.15'], 'autoload' => ['psr-4' => ['Symplify\\Tests\\' => 'tests']]]);
};
