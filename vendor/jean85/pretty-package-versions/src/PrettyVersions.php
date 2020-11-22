<?php

namespace _PhpScoper593efff6d962\Jean85;

use _PhpScoper593efff6d962\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper593efff6d962\Jean85\Version
    {
        return new \_PhpScoper593efff6d962\Jean85\Version($packageName, \_PhpScoper593efff6d962\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper593efff6d962\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper593efff6d962\Jean85\Version
    {
        return self::getVersion(\_PhpScoper593efff6d962\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
