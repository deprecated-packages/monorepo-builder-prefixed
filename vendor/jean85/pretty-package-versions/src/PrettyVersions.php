<?php

namespace _PhpScoper15dc67236b17\Jean85;

use _PhpScoper15dc67236b17\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper15dc67236b17\Jean85\Version
    {
        return new \_PhpScoper15dc67236b17\Jean85\Version($packageName, \_PhpScoper15dc67236b17\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper15dc67236b17\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper15dc67236b17\Jean85\Version
    {
        return self::getVersion(\_PhpScoper15dc67236b17\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
