<?php

namespace _PhpScopera4d786bbd33f\Jean85;

use _PhpScopera4d786bbd33f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera4d786bbd33f\Jean85\Version
    {
        return new \_PhpScopera4d786bbd33f\Jean85\Version($packageName, \_PhpScopera4d786bbd33f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera4d786bbd33f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera4d786bbd33f\Jean85\Version
    {
        return self::getVersion(\_PhpScopera4d786bbd33f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
