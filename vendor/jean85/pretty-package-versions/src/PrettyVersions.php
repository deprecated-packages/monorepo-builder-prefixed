<?php

namespace _PhpScoper14531b498d75\Jean85;

use _PhpScoper14531b498d75\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper14531b498d75\Jean85\Version
    {
        return new \_PhpScoper14531b498d75\Jean85\Version($packageName, \_PhpScoper14531b498d75\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper14531b498d75\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper14531b498d75\Jean85\Version
    {
        return self::getVersion(\_PhpScoper14531b498d75\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
