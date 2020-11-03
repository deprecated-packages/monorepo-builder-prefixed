<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Composer;

use Composer\Autoload\ClassLoader;
use _PhpScopere73d4c0b7ec8\Nette\Utils\Strings;
use ReflectionClass;
/**
 * @see \Symplify\PackageBuilder\Tests\Composer\VendorDirProviderTest
 */
final class VendorDirProvider
{
    public function provide() : string
    {
        $rootFolder = \getenv('SystemDrive', \true) . \DIRECTORY_SEPARATOR;
        $path = __DIR__;
        while (!\_PhpScopere73d4c0b7ec8\Nette\Utils\Strings::endsWith($path, 'vendor') && $path !== $rootFolder) {
            $path = \dirname($path);
        }
        if ($path !== $rootFolder) {
            return $path;
        }
        return $this->reflectionFallback();
    }
    private function reflectionFallback() : string
    {
        $reflectionClass = new \ReflectionClass(\Composer\Autoload\ClassLoader::class);
        return \dirname($reflectionClass->getFileName(), 2);
    }
}
