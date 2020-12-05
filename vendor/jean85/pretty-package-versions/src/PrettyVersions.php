<?php

namespace _PhpScoperc1a0b7b3175f\Jean85;

use _PhpScoperc1a0b7b3175f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc1a0b7b3175f\Jean85\Version
    {
        return new \_PhpScoperc1a0b7b3175f\Jean85\Version($packageName, \_PhpScoperc1a0b7b3175f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc1a0b7b3175f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc1a0b7b3175f\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc1a0b7b3175f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
