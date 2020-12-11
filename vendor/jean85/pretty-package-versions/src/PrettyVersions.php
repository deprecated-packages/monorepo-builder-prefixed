<?php

namespace _PhpScoperbecbc4cd500f\Jean85;

use _PhpScoperbecbc4cd500f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperbecbc4cd500f\Jean85\Version
    {
        return new \_PhpScoperbecbc4cd500f\Jean85\Version($packageName, \_PhpScoperbecbc4cd500f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperbecbc4cd500f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperbecbc4cd500f\Jean85\Version
    {
        return self::getVersion(\_PhpScoperbecbc4cd500f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
