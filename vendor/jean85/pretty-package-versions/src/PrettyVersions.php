<?php

namespace _PhpScopereb9e28d9f307\Jean85;

use _PhpScopereb9e28d9f307\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopereb9e28d9f307\Jean85\Version
    {
        return new \_PhpScopereb9e28d9f307\Jean85\Version($packageName, \_PhpScopereb9e28d9f307\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopereb9e28d9f307\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopereb9e28d9f307\Jean85\Version
    {
        return self::getVersion(\_PhpScopereb9e28d9f307\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
