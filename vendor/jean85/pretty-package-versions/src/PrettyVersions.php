<?php

namespace _PhpScoper43009128da38\Jean85;

use _PhpScoper43009128da38\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper43009128da38\Jean85\Version
    {
        return new \_PhpScoper43009128da38\Jean85\Version($packageName, \_PhpScoper43009128da38\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper43009128da38\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper43009128da38\Jean85\Version
    {
        return self::getVersion(\_PhpScoper43009128da38\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
