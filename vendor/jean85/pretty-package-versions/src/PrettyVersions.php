<?php

namespace _PhpScoperee3ad0c2c096\Jean85;

use _PhpScoperee3ad0c2c096\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperee3ad0c2c096\Jean85\Version
    {
        return new \_PhpScoperee3ad0c2c096\Jean85\Version($packageName, \_PhpScoperee3ad0c2c096\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperee3ad0c2c096\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperee3ad0c2c096\Jean85\Version
    {
        return self::getVersion(\_PhpScoperee3ad0c2c096\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
