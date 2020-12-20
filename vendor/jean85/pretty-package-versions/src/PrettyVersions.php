<?php

namespace _PhpScoper50e98fdc5bc0\Jean85;

use _PhpScoper50e98fdc5bc0\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper50e98fdc5bc0\Jean85\Version
    {
        return new \_PhpScoper50e98fdc5bc0\Jean85\Version($packageName, \_PhpScoper50e98fdc5bc0\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper50e98fdc5bc0\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper50e98fdc5bc0\Jean85\Version
    {
        return self::getVersion(\_PhpScoper50e98fdc5bc0\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
