<?php

namespace _PhpScoper8b183f8218dc\Jean85;

use _PhpScoper8b183f8218dc\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper8b183f8218dc\Jean85\Version
    {
        return new \_PhpScoper8b183f8218dc\Jean85\Version($packageName, \_PhpScoper8b183f8218dc\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper8b183f8218dc\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper8b183f8218dc\Jean85\Version
    {
        return self::getVersion(\_PhpScoper8b183f8218dc\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
