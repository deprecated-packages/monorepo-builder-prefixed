<?php

namespace _PhpScopera42d72b2de70\Jean85;

use _PhpScopera42d72b2de70\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera42d72b2de70\Jean85\Version
    {
        return new \_PhpScopera42d72b2de70\Jean85\Version($packageName, \_PhpScopera42d72b2de70\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopera42d72b2de70\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopera42d72b2de70\Jean85\Version
    {
        return self::getVersion(\_PhpScopera42d72b2de70\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
