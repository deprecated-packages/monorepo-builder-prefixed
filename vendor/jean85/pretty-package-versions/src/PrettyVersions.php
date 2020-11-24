<?php

namespace _PhpScopere846b54512fc\Jean85;

use _PhpScopere846b54512fc\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere846b54512fc\Jean85\Version
    {
        return new \_PhpScopere846b54512fc\Jean85\Version($packageName, \_PhpScopere846b54512fc\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopere846b54512fc\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopere846b54512fc\Jean85\Version
    {
        return self::getVersion(\_PhpScopere846b54512fc\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
