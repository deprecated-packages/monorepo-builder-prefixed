<?php

namespace _PhpScoperf237fc62366a\Jean85;

use _PhpScoperf237fc62366a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf237fc62366a\Jean85\Version
    {
        return new \_PhpScoperf237fc62366a\Jean85\Version($packageName, \_PhpScoperf237fc62366a\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperf237fc62366a\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperf237fc62366a\Jean85\Version
    {
        return self::getVersion(\_PhpScoperf237fc62366a\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
