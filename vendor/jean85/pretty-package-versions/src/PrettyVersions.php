<?php

namespace _PhpScoperf48ea5df9e9b\Jean85;

use _PhpScoperf48ea5df9e9b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf48ea5df9e9b\Jean85\Version
    {
        return new \_PhpScoperf48ea5df9e9b\Jean85\Version($packageName, \_PhpScoperf48ea5df9e9b\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperf48ea5df9e9b\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperf48ea5df9e9b\Jean85\Version
    {
        return self::getVersion(\_PhpScoperf48ea5df9e9b\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
