<?php

namespace _PhpScoper76c4aa553101\Jean85;

use _PhpScoper76c4aa553101\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper76c4aa553101\Jean85\Version
    {
        return new \_PhpScoper76c4aa553101\Jean85\Version($packageName, \_PhpScoper76c4aa553101\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper76c4aa553101\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper76c4aa553101\Jean85\Version
    {
        return self::getVersion(\_PhpScoper76c4aa553101\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
