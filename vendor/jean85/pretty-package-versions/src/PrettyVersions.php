<?php

namespace _PhpScoperdd624bbcb4e5\Jean85;

use _PhpScoperdd624bbcb4e5\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperdd624bbcb4e5\Jean85\Version
    {
        return new \_PhpScoperdd624bbcb4e5\Jean85\Version($packageName, \_PhpScoperdd624bbcb4e5\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperdd624bbcb4e5\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperdd624bbcb4e5\Jean85\Version
    {
        return self::getVersion(\_PhpScoperdd624bbcb4e5\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
