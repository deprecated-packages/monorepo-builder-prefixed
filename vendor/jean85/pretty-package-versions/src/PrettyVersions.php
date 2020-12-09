<?php

namespace _PhpScopera85504f0ea7b\Jean85;

use _PhpScopera85504f0ea7b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera85504f0ea7b\Jean85\Version
    {
        return new \_PhpScopera85504f0ea7b\Jean85\Version($packageName, \_PhpScopera85504f0ea7b\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera85504f0ea7b\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera85504f0ea7b\Jean85\Version
    {
        return self::getVersion(\_PhpScopera85504f0ea7b\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
