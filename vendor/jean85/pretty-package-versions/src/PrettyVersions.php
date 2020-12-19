<?php

namespace _PhpScoperf6f8e31183c3\Jean85;

use _PhpScoperf6f8e31183c3\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf6f8e31183c3\Jean85\Version
    {
        return new \_PhpScoperf6f8e31183c3\Jean85\Version($packageName, \_PhpScoperf6f8e31183c3\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperf6f8e31183c3\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperf6f8e31183c3\Jean85\Version
    {
        return self::getVersion(\_PhpScoperf6f8e31183c3\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
