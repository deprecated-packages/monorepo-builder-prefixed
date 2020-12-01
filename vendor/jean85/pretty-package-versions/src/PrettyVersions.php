<?php

namespace _PhpScopera28be7b3fe51\Jean85;

use _PhpScopera28be7b3fe51\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera28be7b3fe51\Jean85\Version
    {
        return new \_PhpScopera28be7b3fe51\Jean85\Version($packageName, \_PhpScopera28be7b3fe51\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera28be7b3fe51\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera28be7b3fe51\Jean85\Version
    {
        return self::getVersion(\_PhpScopera28be7b3fe51\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
