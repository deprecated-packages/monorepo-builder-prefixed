<?php

namespace _PhpScopere3ed9f66440c\Jean85;

use _PhpScopere3ed9f66440c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere3ed9f66440c\Jean85\Version
    {
        return new \_PhpScopere3ed9f66440c\Jean85\Version($packageName, \_PhpScopere3ed9f66440c\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopere3ed9f66440c\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopere3ed9f66440c\Jean85\Version
    {
        return self::getVersion(\_PhpScopere3ed9f66440c\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
