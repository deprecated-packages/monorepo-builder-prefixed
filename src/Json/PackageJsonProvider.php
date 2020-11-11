<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Json;

use Symplify\MonorepoBuilder\Package\PackageProvider;
final class PackageJsonProvider
{
    /**
     * @var PackageProvider
     */
    private $packageProvider;
    public function __construct(\Symplify\MonorepoBuilder\Package\PackageProvider $packageProvider)
    {
        $this->packageProvider = $packageProvider;
    }
    /**
     * @return array<string, string[]>
     */
    public function createPackagePaths() : array
    {
        $packageRelativePaths = [];
        foreach ($this->packageProvider->provide() as $package) {
            $packageRelativePaths[] = $package->getRelativePath();
        }
        return ['package_path' => $packageRelativePaths];
    }
    /**
     * @return array<string, string[]>
     */
    public function createPackageNames() : array
    {
        $packageShortNames = [];
        foreach ($this->packageProvider->provide() as $package) {
            $packageShortNames[] = $package->getShortName();
        }
        return ['package_name' => $packageShortNames];
    }
}
