<?php

namespace _PhpScoperfccd2ca01403\Jean85;

use _PhpScoperfccd2ca01403\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperfccd2ca01403\Jean85\Version
    {
        return new \_PhpScoperfccd2ca01403\Jean85\Version($packageName, \_PhpScoperfccd2ca01403\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperfccd2ca01403\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperfccd2ca01403\Jean85\Version
    {
        return self::getVersion(\_PhpScoperfccd2ca01403\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
