<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Testing\PackageDependency;

use Symplify\ComposerJsonManipulator\ValueObject\ComposerJsonSection;
use Symplify\MonorepoBuilder\Package\PackageNamesProvider;
final class UsedPackagesResolver
{
    /**
     * @var PackageNamesProvider
     */
    private $packageNamesProvider;
    public function __construct(\Symplify\MonorepoBuilder\Package\PackageNamesProvider $packageNamesProvider)
    {
        $this->packageNamesProvider = $packageNamesProvider;
    }
    /**
     * @param mixed[] $packageComposerJson
     * @return string[]
     */
    public function resolveForPackage(array $packageComposerJson) : array
    {
        $usedPackageNames = [];
        foreach ([\Symplify\ComposerJsonManipulator\ValueObject\ComposerJsonSection::REQUIRE, \Symplify\ComposerJsonManipulator\ValueObject\ComposerJsonSection::REQUIRE_DEV] as $section) {
            if (!isset($packageComposerJson[$section])) {
                continue;
            }
            $sectionKeys = \array_keys($packageComposerJson[$section]);
            foreach ($sectionKeys as $packageName) {
                if (!\in_array($packageName, $this->packageNamesProvider->provide(), \true)) {
                    continue;
                }
                $usedPackageNames[] = $packageName;
            }
        }
        return $usedPackageNames;
    }
}
