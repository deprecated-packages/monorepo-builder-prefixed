<?php

namespace _PhpScoper472361b15529\Jean85;

use _PhpScoper472361b15529\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper472361b15529\Jean85\Version
    {
        return new \_PhpScoper472361b15529\Jean85\Version($packageName, \_PhpScoper472361b15529\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper472361b15529\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper472361b15529\Jean85\Version
    {
        return self::getVersion(\_PhpScoper472361b15529\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}