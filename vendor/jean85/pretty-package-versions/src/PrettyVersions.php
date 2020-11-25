<?php

namespace _PhpScopere97aad8070b4\Jean85;

use _PhpScopere97aad8070b4\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere97aad8070b4\Jean85\Version
    {
        return new \_PhpScopere97aad8070b4\Jean85\Version($packageName, \_PhpScopere97aad8070b4\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopere97aad8070b4\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopere97aad8070b4\Jean85\Version
    {
        return self::getVersion(\_PhpScopere97aad8070b4\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
