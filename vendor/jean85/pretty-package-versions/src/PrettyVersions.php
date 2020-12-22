<?php

namespace _PhpScoper8e5d8d76215d\Jean85;

use _PhpScoper8e5d8d76215d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper8e5d8d76215d\Jean85\Version
    {
        return new \_PhpScoper8e5d8d76215d\Jean85\Version($packageName, \_PhpScoper8e5d8d76215d\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper8e5d8d76215d\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper8e5d8d76215d\Jean85\Version
    {
        return self::getVersion(\_PhpScoper8e5d8d76215d\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
