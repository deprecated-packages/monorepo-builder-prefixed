<?php

declare (strict_types=1);
namespace _PhpScoperba481e4bff85;

use _PhpScoperba481e4bff85\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperba481e4bff85\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\_PhpScoperba481e4bff85\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
