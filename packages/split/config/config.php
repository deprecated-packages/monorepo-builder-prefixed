<?php

declare (strict_types=1);
namespace _PhpScoperdd9048e10aae;

use _PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MonorepoBuilder\Split\ValueObject\ConvertFormat;
use Symplify\MonorepoBuilder\ValueObject\Option;
use Symplify\PackageBuilder\Strings\StringFormatConverter;
use Symplify\SmartFileSystem\FileSystemGuard;
return static function (\_PhpScoperdd9048e10aae\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\MonorepoBuilder\ValueObject\Option::DIRECTORIES_TO_REPOSITORIES, []);
    $parameters->set(\Symplify\MonorepoBuilder\ValueObject\Option::DIRECTORIES_TO_REPOSITORIES_CONVERT_FORMAT, \Symplify\MonorepoBuilder\Split\ValueObject\ConvertFormat::EQUAL);
    $parameters->set(\Symplify\MonorepoBuilder\ValueObject\Option::SUBSPLIT_CACHE_DIRECTORY, '%kernel.cache_dir%/_subsplit');
    $parameters->set('env(GITHUB_TOKEN)', null);
    $parameters->set(\Symplify\MonorepoBuilder\ValueObject\Option::GITHUB_TOKEN, '%env(GITHUB_TOKEN)%');
    $parameters->set(\Symplify\MonorepoBuilder\ValueObject\Option::REPOSITORY, '%root_directory%/.git');
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\MonorepoBuilder\\Split\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Exception', __DIR__ . '/../src/ValueObject']);
    $services->set(\Symplify\SmartFileSystem\FileSystemGuard::class);
    $services->set(\Symplify\PackageBuilder\Strings\StringFormatConverter::class);
};
