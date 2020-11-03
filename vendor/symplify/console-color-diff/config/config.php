<?php

declare (strict_types=1);
namespace _PhpScoperd3e9cfbe9d90;

use _PhpScoperd3e9cfbe9d90\SebastianBergmann\Diff\Differ;
use _PhpScoperd3e9cfbe9d90\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperd3e9cfbe9d90\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperd3e9cfbe9d90\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperd3e9cfbe9d90\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperd3e9cfbe9d90\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperd3e9cfbe9d90\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperd3e9cfbe9d90\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
