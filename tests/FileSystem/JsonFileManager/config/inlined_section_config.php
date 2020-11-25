<?php

declare (strict_types=1);
namespace _PhpScoperfa8ac9431c57;

use _PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\ComposerJsonManipulator\ValueObject\Option;
return static function (\_PhpScoperfa8ac9431c57\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\ComposerJsonManipulator\ValueObject\Option::INLINE_SECTIONS, ['inline_section']);
};
