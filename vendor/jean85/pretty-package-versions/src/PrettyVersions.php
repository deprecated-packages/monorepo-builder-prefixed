<?php

namespace _PhpScoperab3ccffcffcd\Jean85;

use _PhpScoperab3ccffcffcd\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperab3ccffcffcd\Jean85\Version
    {
        return new \_PhpScoperab3ccffcffcd\Jean85\Version($packageName, \_PhpScoperab3ccffcffcd\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperab3ccffcffcd\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperab3ccffcffcd\Jean85\Version
    {
        return self::getVersion(\_PhpScoperab3ccffcffcd\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
