<?php

namespace _PhpScopera1d8e0344ecf\Jean85;

use _PhpScopera1d8e0344ecf\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera1d8e0344ecf\Jean85\Version
    {
        return new \_PhpScopera1d8e0344ecf\Jean85\Version($packageName, \_PhpScopera1d8e0344ecf\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera1d8e0344ecf\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera1d8e0344ecf\Jean85\Version
    {
        return self::getVersion(\_PhpScopera1d8e0344ecf\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
