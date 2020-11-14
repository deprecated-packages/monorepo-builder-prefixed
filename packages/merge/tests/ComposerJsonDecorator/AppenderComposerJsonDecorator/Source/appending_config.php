<?php

declare (strict_types=1);
namespace _PhpScopera2f1d1d42b88;

use _PhpScopera2f1d1d42b88\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MonorepoBuilder\ValueObject\Option;
return static function (\_PhpScopera2f1d1d42b88\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\MonorepoBuilder\ValueObject\Option::DATA_TO_APPEND, ['require-dev' => ['phpstan/phpstan' => '^0.9', 'tracy/tracy' => '^2.4', 'slam/php-cs-fixer-extensions' => '^1.15'], 'autoload' => ['psr-4' => ['Symplify\\Tests\\' => 'tests']]]);
};
