<?php

namespace _PhpScoperd72531165ef5\Jean85;

use _PhpScoperd72531165ef5\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd72531165ef5\Jean85\Version
    {
        return new \_PhpScoperd72531165ef5\Jean85\Version($packageName, \_PhpScoperd72531165ef5\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperd72531165ef5\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperd72531165ef5\Jean85\Version
    {
        return self::getVersion(\_PhpScoperd72531165ef5\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
