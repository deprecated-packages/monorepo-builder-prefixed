<?php

namespace _PhpScopera3403994bd90\Jean85;

use _PhpScopera3403994bd90\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera3403994bd90\Jean85\Version
    {
        return new \_PhpScopera3403994bd90\Jean85\Version($packageName, \_PhpScopera3403994bd90\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera3403994bd90\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera3403994bd90\Jean85\Version
    {
        return self::getVersion(\_PhpScopera3403994bd90\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
