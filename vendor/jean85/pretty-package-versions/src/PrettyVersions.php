<?php

namespace _PhpScopere7b233920bf2\Jean85;

use _PhpScopere7b233920bf2\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere7b233920bf2\Jean85\Version
    {
        return new \_PhpScopere7b233920bf2\Jean85\Version($packageName, \_PhpScopere7b233920bf2\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopere7b233920bf2\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopere7b233920bf2\Jean85\Version
    {
        return self::getVersion(\_PhpScopere7b233920bf2\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
