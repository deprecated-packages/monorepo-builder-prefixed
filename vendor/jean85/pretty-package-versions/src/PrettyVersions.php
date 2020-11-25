<?php

namespace _PhpScoper93a7e58d9dd1\Jean85;

use _PhpScoper93a7e58d9dd1\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper93a7e58d9dd1\Jean85\Version
    {
        return new \_PhpScoper93a7e58d9dd1\Jean85\Version($packageName, \_PhpScoper93a7e58d9dd1\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper93a7e58d9dd1\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper93a7e58d9dd1\Jean85\Version
    {
        return self::getVersion(\_PhpScoper93a7e58d9dd1\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
