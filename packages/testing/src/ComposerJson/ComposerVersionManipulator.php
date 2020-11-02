<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\Testing\ComposerJson;

use Symplify\ComposerJsonManipulator\ValueObject\ComposerJsonSection;
final class ComposerVersionManipulator
{
    /**
     * @param mixed[] $packageComposerJson
     * @param string[] $usedPackageNames
     * @return mixed[]
     */
    public function setAsteriskVersionForUsedPackages(array $packageComposerJson, array $usedPackageNames) : array
    {
        foreach ([\Symplify\ComposerJsonManipulator\ValueObject\ComposerJsonSection::REQUIRE, \Symplify\ComposerJsonManipulator\ValueObject\ComposerJsonSection::REQUIRE_DEV] as $section) {
            foreach ($usedPackageNames as $usedPackageName) {
                if (!isset($packageComposerJson[$section][$usedPackageName])) {
                    continue;
                }
                $packageComposerJson[$section][$usedPackageName] = 'dev-master';
            }
        }
        return $packageComposerJson;
    }
}
