<?php

namespace _PhpScoper30f4a2553084\Jean85;

use _PhpScoper30f4a2553084\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper30f4a2553084\Jean85\Version
    {
        return new \_PhpScoper30f4a2553084\Jean85\Version($packageName, \_PhpScoper30f4a2553084\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper30f4a2553084\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper30f4a2553084\Jean85\Version
    {
        return self::getVersion(\_PhpScoper30f4a2553084\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
