<?php

namespace _PhpScoper621122bdc380\Jean85;

use _PhpScoper621122bdc380\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper621122bdc380\Jean85\Version
    {
        return new \_PhpScoper621122bdc380\Jean85\Version($packageName, \_PhpScoper621122bdc380\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper621122bdc380\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper621122bdc380\Jean85\Version
    {
        return self::getVersion(\_PhpScoper621122bdc380\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
