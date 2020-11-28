<?php

namespace _PhpScoperbe77f3b0e77d\Jean85;

use _PhpScoperbe77f3b0e77d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperbe77f3b0e77d\Jean85\Version
    {
        return new \_PhpScoperbe77f3b0e77d\Jean85\Version($packageName, \_PhpScoperbe77f3b0e77d\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperbe77f3b0e77d\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperbe77f3b0e77d\Jean85\Version
    {
        return self::getVersion(\_PhpScoperbe77f3b0e77d\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
