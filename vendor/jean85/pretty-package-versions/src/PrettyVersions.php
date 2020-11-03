<?php

namespace _PhpScoperd6a443964d04\Jean85;

use _PhpScoperd6a443964d04\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd6a443964d04\Jean85\Version
    {
        return new \_PhpScoperd6a443964d04\Jean85\Version($packageName, \_PhpScoperd6a443964d04\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperd6a443964d04\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperd6a443964d04\Jean85\Version
    {
        return self::getVersion(\_PhpScoperd6a443964d04\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
