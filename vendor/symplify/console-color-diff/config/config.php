<?php

declare (strict_types=1);
namespace _PhpScoper8a4bdaafa6ec;

use _PhpScoper8a4bdaafa6ec\SebastianBergmann\Diff\Differ;
use _PhpScoper8a4bdaafa6ec\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoper8a4bdaafa6ec\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper8a4bdaafa6ec\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\ConsoleColorDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\ConsoleColorDiff\Differ\MarkdownDiffer;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoper8a4bdaafa6ec\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper8a4bdaafa6ec\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper8a4bdaafa6ec\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper8a4bdaafa6ec\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper8a4bdaafa6ec\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoper8a4bdaafa6ec\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoper8a4bdaafa6ec\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\ConsoleColorDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoper8a4bdaafa6ec\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoper8a4bdaafa6ec\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\ConsoleColorDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoper8a4bdaafa6ec\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
