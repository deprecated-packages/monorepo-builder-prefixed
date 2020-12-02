<?php

namespace _PhpScopera2ff5fd2b59c\Jean85;

use _PhpScopera2ff5fd2b59c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera2ff5fd2b59c\Jean85\Version
    {
        return new \_PhpScopera2ff5fd2b59c\Jean85\Version($packageName, \_PhpScopera2ff5fd2b59c\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera2ff5fd2b59c\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera2ff5fd2b59c\Jean85\Version
    {
        return self::getVersion(\_PhpScopera2ff5fd2b59c\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
