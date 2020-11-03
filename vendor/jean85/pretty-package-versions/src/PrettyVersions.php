<?php

namespace _PhpScoper61d2aa534566\Jean85;

use _PhpScoper61d2aa534566\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper61d2aa534566\Jean85\Version
    {
        return new \_PhpScoper61d2aa534566\Jean85\Version($packageName, \_PhpScoper61d2aa534566\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper61d2aa534566\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper61d2aa534566\Jean85\Version
    {
        return self::getVersion(\_PhpScoper61d2aa534566\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
