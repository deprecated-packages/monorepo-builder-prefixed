<?php

namespace _PhpScoperf8eaec7affbd\Jean85;

use _PhpScoperf8eaec7affbd\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf8eaec7affbd\Jean85\Version
    {
        return new \_PhpScoperf8eaec7affbd\Jean85\Version($packageName, \_PhpScoperf8eaec7affbd\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperf8eaec7affbd\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperf8eaec7affbd\Jean85\Version
    {
        return self::getVersion(\_PhpScoperf8eaec7affbd\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
