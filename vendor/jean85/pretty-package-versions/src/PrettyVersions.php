<?php

namespace _PhpScopere2a14c1f9852\Jean85;

use _PhpScopere2a14c1f9852\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere2a14c1f9852\Jean85\Version
    {
        return new \_PhpScopere2a14c1f9852\Jean85\Version($packageName, \_PhpScopere2a14c1f9852\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopere2a14c1f9852\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopere2a14c1f9852\Jean85\Version
    {
        return self::getVersion(\_PhpScopere2a14c1f9852\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
