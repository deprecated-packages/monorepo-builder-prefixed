<?php

namespace _PhpScoperd410cf9baa15\Jean85;

use _PhpScoperd410cf9baa15\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd410cf9baa15\Jean85\Version
    {
        return new \_PhpScoperd410cf9baa15\Jean85\Version($packageName, \_PhpScoperd410cf9baa15\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperd410cf9baa15\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperd410cf9baa15\Jean85\Version
    {
        return self::getVersion(\_PhpScoperd410cf9baa15\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
