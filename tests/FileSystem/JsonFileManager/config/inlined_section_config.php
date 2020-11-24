<?php

declare (strict_types=1);
namespace _PhpScoperd2185c67a4b4;

use _PhpScoperd2185c67a4b4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\ComposerJsonManipulator\ValueObject\Option;
return static function (\_PhpScoperd2185c67a4b4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\ComposerJsonManipulator\ValueObject\Option::INLINE_SECTIONS, ['inline_section']);
};
