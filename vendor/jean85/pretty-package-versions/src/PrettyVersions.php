<?php

namespace _PhpScoper897dcdb71069\Jean85;

use _PhpScoper897dcdb71069\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper897dcdb71069\Jean85\Version
    {
        return new \_PhpScoper897dcdb71069\Jean85\Version($packageName, \_PhpScoper897dcdb71069\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper897dcdb71069\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper897dcdb71069\Jean85\Version
    {
        return self::getVersion(\_PhpScoper897dcdb71069\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
