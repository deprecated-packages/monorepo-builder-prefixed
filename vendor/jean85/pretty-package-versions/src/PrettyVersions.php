<?php

namespace _PhpScoper56e9de378e59\Jean85;

use _PhpScoper56e9de378e59\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper56e9de378e59\Jean85\Version
    {
        return new \_PhpScoper56e9de378e59\Jean85\Version($packageName, \_PhpScoper56e9de378e59\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper56e9de378e59\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper56e9de378e59\Jean85\Version
    {
        return self::getVersion(\_PhpScoper56e9de378e59\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
