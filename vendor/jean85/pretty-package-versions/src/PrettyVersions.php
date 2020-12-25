<?php

namespace _PhpScoperf0aae7819675\Jean85;

use _PhpScoperf0aae7819675\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf0aae7819675\Jean85\Version
    {
        return new \_PhpScoperf0aae7819675\Jean85\Version($packageName, \_PhpScoperf0aae7819675\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperf0aae7819675\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperf0aae7819675\Jean85\Version
    {
        return self::getVersion(\_PhpScoperf0aae7819675\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
