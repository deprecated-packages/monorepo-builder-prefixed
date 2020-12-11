<?php

namespace _PhpScoper7d795aa8de8d\Jean85;

use _PhpScoper7d795aa8de8d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper7d795aa8de8d\Jean85\Version
    {
        return new \_PhpScoper7d795aa8de8d\Jean85\Version($packageName, \_PhpScoper7d795aa8de8d\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper7d795aa8de8d\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper7d795aa8de8d\Jean85\Version
    {
        return self::getVersion(\_PhpScoper7d795aa8de8d\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
