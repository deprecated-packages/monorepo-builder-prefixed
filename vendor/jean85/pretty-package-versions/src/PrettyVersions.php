<?php

namespace _PhpScopere4e8aecb81b9\Jean85;

use _PhpScopere4e8aecb81b9\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere4e8aecb81b9\Jean85\Version
    {
        return new \_PhpScopere4e8aecb81b9\Jean85\Version($packageName, \_PhpScopere4e8aecb81b9\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopere4e8aecb81b9\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopere4e8aecb81b9\Jean85\Version
    {
        return self::getVersion(\_PhpScopere4e8aecb81b9\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
