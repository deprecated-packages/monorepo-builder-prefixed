<?php

namespace _PhpScoperf40000691b7b\Jean85;

use _PhpScoperf40000691b7b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf40000691b7b\Jean85\Version
    {
        return new \_PhpScoperf40000691b7b\Jean85\Version($packageName, \_PhpScoperf40000691b7b\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperf40000691b7b\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperf40000691b7b\Jean85\Version
    {
        return self::getVersion(\_PhpScoperf40000691b7b\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
