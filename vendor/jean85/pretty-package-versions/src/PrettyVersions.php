<?php

namespace _PhpScoperd79f30a2f8be\Jean85;

use _PhpScoperd79f30a2f8be\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd79f30a2f8be\Jean85\Version
    {
        return new \_PhpScoperd79f30a2f8be\Jean85\Version($packageName, \_PhpScoperd79f30a2f8be\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperd79f30a2f8be\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperd79f30a2f8be\Jean85\Version
    {
        return self::getVersion(\_PhpScoperd79f30a2f8be\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
