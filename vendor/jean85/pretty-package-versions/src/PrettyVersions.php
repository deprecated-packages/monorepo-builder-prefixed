<?php

namespace _PhpScoperf9ff1c3447b1\Jean85;

use _PhpScoperf9ff1c3447b1\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf9ff1c3447b1\Jean85\Version
    {
        return new \_PhpScoperf9ff1c3447b1\Jean85\Version($packageName, \_PhpScoperf9ff1c3447b1\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperf9ff1c3447b1\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperf9ff1c3447b1\Jean85\Version
    {
        return self::getVersion(\_PhpScoperf9ff1c3447b1\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
