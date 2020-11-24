<?php

namespace _PhpScoperd2185c67a4b4\Jean85;

use _PhpScoperd2185c67a4b4\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd2185c67a4b4\Jean85\Version
    {
        return new \_PhpScoperd2185c67a4b4\Jean85\Version($packageName, \_PhpScoperd2185c67a4b4\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperd2185c67a4b4\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperd2185c67a4b4\Jean85\Version
    {
        return self::getVersion(\_PhpScoperd2185c67a4b4\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
