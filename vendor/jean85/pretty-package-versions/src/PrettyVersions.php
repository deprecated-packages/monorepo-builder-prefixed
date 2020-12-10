<?php

namespace _PhpScoperec2b815193b4\Jean85;

use _PhpScoperec2b815193b4\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperec2b815193b4\Jean85\Version
    {
        return new \_PhpScoperec2b815193b4\Jean85\Version($packageName, \_PhpScoperec2b815193b4\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperec2b815193b4\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperec2b815193b4\Jean85\Version
    {
        return self::getVersion(\_PhpScoperec2b815193b4\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
