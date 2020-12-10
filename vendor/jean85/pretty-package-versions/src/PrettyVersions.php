<?php

namespace _PhpScopere691b6ebfa72\Jean85;

use _PhpScopere691b6ebfa72\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere691b6ebfa72\Jean85\Version
    {
        return new \_PhpScopere691b6ebfa72\Jean85\Version($packageName, \_PhpScopere691b6ebfa72\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopere691b6ebfa72\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopere691b6ebfa72\Jean85\Version
    {
        return self::getVersion(\_PhpScopere691b6ebfa72\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
