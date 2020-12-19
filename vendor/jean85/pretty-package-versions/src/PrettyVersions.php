<?php

namespace _PhpScopere71835ca1415\Jean85;

use _PhpScopere71835ca1415\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere71835ca1415\Jean85\Version
    {
        return new \_PhpScopere71835ca1415\Jean85\Version($packageName, \_PhpScopere71835ca1415\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopere71835ca1415\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopere71835ca1415\Jean85\Version
    {
        return self::getVersion(\_PhpScopere71835ca1415\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
