<?php

namespace _PhpScopereaa086e6f852\Jean85;

use _PhpScopereaa086e6f852\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopereaa086e6f852\Jean85\Version
    {
        return new \_PhpScopereaa086e6f852\Jean85\Version($packageName, \_PhpScopereaa086e6f852\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopereaa086e6f852\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopereaa086e6f852\Jean85\Version
    {
        return self::getVersion(\_PhpScopereaa086e6f852\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
