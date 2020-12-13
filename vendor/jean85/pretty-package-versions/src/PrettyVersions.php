<?php

namespace _PhpScoper290ab17573f9\Jean85;

use _PhpScoper290ab17573f9\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper290ab17573f9\Jean85\Version
    {
        return new \_PhpScoper290ab17573f9\Jean85\Version($packageName, \_PhpScoper290ab17573f9\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper290ab17573f9\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper290ab17573f9\Jean85\Version
    {
        return self::getVersion(\_PhpScoper290ab17573f9\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
