<?php

namespace _PhpScopera2c403aec9a8\Jean85;

use _PhpScopera2c403aec9a8\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera2c403aec9a8\Jean85\Version
    {
        return new \_PhpScopera2c403aec9a8\Jean85\Version($packageName, \_PhpScopera2c403aec9a8\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera2c403aec9a8\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera2c403aec9a8\Jean85\Version
    {
        return self::getVersion(\_PhpScopera2c403aec9a8\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
