<?php

namespace _PhpScoper654dfdb702e5\Jean85;

use _PhpScoper654dfdb702e5\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper654dfdb702e5\Jean85\Version
    {
        return new \_PhpScoper654dfdb702e5\Jean85\Version($packageName, \_PhpScoper654dfdb702e5\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper654dfdb702e5\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper654dfdb702e5\Jean85\Version
    {
        return self::getVersion(\_PhpScoper654dfdb702e5\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
