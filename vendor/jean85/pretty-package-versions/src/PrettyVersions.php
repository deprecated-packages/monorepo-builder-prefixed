<?php

namespace _PhpScoper30e4ccea42bd\Jean85;

use _PhpScoper30e4ccea42bd\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper30e4ccea42bd\Jean85\Version
    {
        return new \_PhpScoper30e4ccea42bd\Jean85\Version($packageName, \_PhpScoper30e4ccea42bd\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper30e4ccea42bd\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper30e4ccea42bd\Jean85\Version
    {
        return self::getVersion(\_PhpScoper30e4ccea42bd\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
