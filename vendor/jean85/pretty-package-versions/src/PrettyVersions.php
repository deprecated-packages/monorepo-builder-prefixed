<?php

namespace _PhpScoperf701e46e48a5\Jean85;

use _PhpScoperf701e46e48a5\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf701e46e48a5\Jean85\Version
    {
        return new \_PhpScoperf701e46e48a5\Jean85\Version($packageName, \_PhpScoperf701e46e48a5\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperf701e46e48a5\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperf701e46e48a5\Jean85\Version
    {
        return self::getVersion(\_PhpScoperf701e46e48a5\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
