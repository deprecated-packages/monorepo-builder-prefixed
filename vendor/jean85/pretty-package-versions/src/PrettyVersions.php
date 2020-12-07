<?php

namespace _PhpScopercd5c1af09a49\Jean85;

use _PhpScopercd5c1af09a49\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopercd5c1af09a49\Jean85\Version
    {
        return new \_PhpScopercd5c1af09a49\Jean85\Version($packageName, \_PhpScopercd5c1af09a49\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopercd5c1af09a49\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopercd5c1af09a49\Jean85\Version
    {
        return self::getVersion(\_PhpScopercd5c1af09a49\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
