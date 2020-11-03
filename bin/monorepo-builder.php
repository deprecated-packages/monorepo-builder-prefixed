<?php

// decoupled in own "*.php" file, so ECS, Rector and PHPStan works out of the box here
declare (strict_types=1);
namespace _PhpScoperee8f03533f8b;

use _PhpScoperee8f03533f8b\Symfony\Component\Console\Input\ArgvInput;
use Symplify\MonorepoBuilder\Console\MonorepoBuilderApplication;
use Symplify\MonorepoBuilder\HttpKernel\MonorepoBuilderKernel;
use Symplify\MonorepoBuilder\ValueObject\File;
use Symplify\PackageBuilder\Console\Input\StaticInputDetector;
use Symplify\SetConfigResolver\ConfigResolver;
# 1. autoload
$possibleAutoloadPaths = [
    // after split package
    __DIR__ . '/../vendor/autoload.php',
    // dependency
    __DIR__ . '/../../../autoload.php',
    // monorepo
    __DIR__ . '/../../../vendor/autoload.php',
];
foreach ($possibleAutoloadPaths as $possibleAutoloadPath) {
    if (\file_exists($possibleAutoloadPath)) {
        require_once $possibleAutoloadPath;
        break;
    }
}
$configFileInfos = [];
$configResolver = new \Symplify\SetConfigResolver\ConfigResolver();
$inputConfigFileInfo = $configResolver->resolveFromInputWithFallback(new \_PhpScoperee8f03533f8b\Symfony\Component\Console\Input\ArgvInput(), [\Symplify\MonorepoBuilder\ValueObject\File::CONFIG]);
if ($inputConfigFileInfo !== null) {
    $configFileInfos[] = $inputConfigFileInfo;
}
// the environment name must be "random", so configs are invalidated without clearing the cache
$environment = 'prod' . \random_int(0, 100000);
$monorepoBuilderKernel = new \Symplify\MonorepoBuilder\HttpKernel\MonorepoBuilderKernel($environment, \Symplify\PackageBuilder\Console\Input\StaticInputDetector::isDebug());
if ($configFileInfos !== []) {
    $monorepoBuilderKernel->setConfigs($configFileInfos);
}
$monorepoBuilderKernel->boot();
$container = $monorepoBuilderKernel->getContainer();
# 3. run it
$application = $container->get(\Symplify\MonorepoBuilder\Console\MonorepoBuilderApplication::class);
exit($application->run());
