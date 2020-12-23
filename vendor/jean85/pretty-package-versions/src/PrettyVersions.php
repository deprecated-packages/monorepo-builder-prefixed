<?php

namespace _PhpScopere0f28e6b9bde\Jean85;

use _PhpScopere0f28e6b9bde\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere0f28e6b9bde\Jean85\Version
    {
        return new \_PhpScopere0f28e6b9bde\Jean85\Version($packageName, \_PhpScopere0f28e6b9bde\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopere0f28e6b9bde\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopere0f28e6b9bde\Jean85\Version
    {
        return self::getVersion(\_PhpScopere0f28e6b9bde\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
