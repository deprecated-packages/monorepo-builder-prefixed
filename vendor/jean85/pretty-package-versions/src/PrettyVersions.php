<?php

namespace _PhpScoperd1c9c8ec01a8\Jean85;

use _PhpScoperd1c9c8ec01a8\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd1c9c8ec01a8\Jean85\Version
    {
        return new \_PhpScoperd1c9c8ec01a8\Jean85\Version($packageName, \_PhpScoperd1c9c8ec01a8\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperd1c9c8ec01a8\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperd1c9c8ec01a8\Jean85\Version
    {
        return self::getVersion(\_PhpScoperd1c9c8ec01a8\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
