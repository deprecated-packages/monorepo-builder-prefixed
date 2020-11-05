<?php

declare (strict_types=1);
namespace _PhpScoperf78d2b40800e;

use _PhpScoperf78d2b40800e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\ComposerJsonManipulator\ValueObject\Option;
return static function (\_PhpScoperf78d2b40800e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\ComposerJsonManipulator\ValueObject\Option::INLINE_SECTIONS, ['inline_section']);
};
