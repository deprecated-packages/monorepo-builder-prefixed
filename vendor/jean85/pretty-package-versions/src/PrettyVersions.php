<?php

namespace _PhpScoperbd03d493ccc6\Jean85;

use _PhpScoperbd03d493ccc6\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperbd03d493ccc6\Jean85\Version
    {
        return new \_PhpScoperbd03d493ccc6\Jean85\Version($packageName, \_PhpScoperbd03d493ccc6\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperbd03d493ccc6\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperbd03d493ccc6\Jean85\Version
    {
        return self::getVersion(\_PhpScoperbd03d493ccc6\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
