<?php

namespace _PhpScoperd04ce6546762\Jean85;

use _PhpScoperd04ce6546762\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd04ce6546762\Jean85\Version
    {
        return new \_PhpScoperd04ce6546762\Jean85\Version($packageName, \_PhpScoperd04ce6546762\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperd04ce6546762\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperd04ce6546762\Jean85\Version
    {
        return self::getVersion(\_PhpScoperd04ce6546762\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
