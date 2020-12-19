<?php

namespace _PhpScoperac0a9a33ae94\Jean85;

use _PhpScoperac0a9a33ae94\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperac0a9a33ae94\Jean85\Version
    {
        return new \_PhpScoperac0a9a33ae94\Jean85\Version($packageName, \_PhpScoperac0a9a33ae94\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperac0a9a33ae94\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperac0a9a33ae94\Jean85\Version
    {
        return self::getVersion(\_PhpScoperac0a9a33ae94\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
