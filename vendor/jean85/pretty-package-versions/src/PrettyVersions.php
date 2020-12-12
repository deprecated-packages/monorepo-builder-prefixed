<?php

namespace _PhpScoperad5317739bda\Jean85;

use _PhpScoperad5317739bda\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperad5317739bda\Jean85\Version
    {
        return new \_PhpScoperad5317739bda\Jean85\Version($packageName, \_PhpScoperad5317739bda\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperad5317739bda\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperad5317739bda\Jean85\Version
    {
        return self::getVersion(\_PhpScoperad5317739bda\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
