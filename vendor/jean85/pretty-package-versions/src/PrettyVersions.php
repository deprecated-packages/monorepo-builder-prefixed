<?php

namespace _PhpScoperb15c77d6bb3b\Jean85;

use _PhpScoperb15c77d6bb3b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb15c77d6bb3b\Jean85\Version
    {
        return new \_PhpScoperb15c77d6bb3b\Jean85\Version($packageName, \_PhpScoperb15c77d6bb3b\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperb15c77d6bb3b\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperb15c77d6bb3b\Jean85\Version
    {
        return self::getVersion(\_PhpScoperb15c77d6bb3b\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
