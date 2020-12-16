<?php

namespace _PhpScoperfec5e512f2f8\Jean85;

use _PhpScoperfec5e512f2f8\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperfec5e512f2f8\Jean85\Version
    {
        return new \_PhpScoperfec5e512f2f8\Jean85\Version($packageName, \_PhpScoperfec5e512f2f8\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperfec5e512f2f8\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperfec5e512f2f8\Jean85\Version
    {
        return self::getVersion(\_PhpScoperfec5e512f2f8\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
