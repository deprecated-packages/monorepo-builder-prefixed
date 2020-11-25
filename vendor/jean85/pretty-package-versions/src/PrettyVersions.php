<?php

namespace _PhpScopereaa2cae8e093\Jean85;

use _PhpScopereaa2cae8e093\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopereaa2cae8e093\Jean85\Version
    {
        return new \_PhpScopereaa2cae8e093\Jean85\Version($packageName, \_PhpScopereaa2cae8e093\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopereaa2cae8e093\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopereaa2cae8e093\Jean85\Version
    {
        return self::getVersion(\_PhpScopereaa2cae8e093\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
