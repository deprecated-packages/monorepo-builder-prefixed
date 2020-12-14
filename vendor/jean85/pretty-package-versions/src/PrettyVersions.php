<?php

namespace _PhpScoper5f41da07187c\Jean85;

use _PhpScoper5f41da07187c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper5f41da07187c\Jean85\Version
    {
        return new \_PhpScoper5f41da07187c\Jean85\Version($packageName, \_PhpScoper5f41da07187c\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper5f41da07187c\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper5f41da07187c\Jean85\Version
    {
        return self::getVersion(\_PhpScoper5f41da07187c\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
