<?php

namespace _PhpScoper46d05083fbc3\Jean85;

use _PhpScoper46d05083fbc3\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper46d05083fbc3\Jean85\Version
    {
        return new \_PhpScoper46d05083fbc3\Jean85\Version($packageName, \_PhpScoper46d05083fbc3\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper46d05083fbc3\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper46d05083fbc3\Jean85\Version
    {
        return self::getVersion(\_PhpScoper46d05083fbc3\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
