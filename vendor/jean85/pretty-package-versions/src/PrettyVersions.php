<?php

namespace _PhpScopera5e5d165d78c\Jean85;

use _PhpScopera5e5d165d78c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera5e5d165d78c\Jean85\Version
    {
        return new \_PhpScopera5e5d165d78c\Jean85\Version($packageName, \_PhpScopera5e5d165d78c\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera5e5d165d78c\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera5e5d165d78c\Jean85\Version
    {
        return self::getVersion(\_PhpScopera5e5d165d78c\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
