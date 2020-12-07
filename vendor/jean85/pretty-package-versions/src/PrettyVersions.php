<?php

namespace _PhpScopera8413c4aa124\Jean85;

use _PhpScopera8413c4aa124\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera8413c4aa124\Jean85\Version
    {
        return new \_PhpScopera8413c4aa124\Jean85\Version($packageName, \_PhpScopera8413c4aa124\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera8413c4aa124\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera8413c4aa124\Jean85\Version
    {
        return self::getVersion(\_PhpScopera8413c4aa124\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
