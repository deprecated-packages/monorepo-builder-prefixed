<?php

namespace _PhpScoper056b892061ac\Jean85;

use _PhpScoper056b892061ac\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper056b892061ac\Jean85\Version
    {
        return new \_PhpScoper056b892061ac\Jean85\Version($packageName, \_PhpScoper056b892061ac\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper056b892061ac\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper056b892061ac\Jean85\Version
    {
        return self::getVersion(\_PhpScoper056b892061ac\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
