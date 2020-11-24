<?php

namespace _PhpScoper641780a4edd2\Jean85;

use _PhpScoper641780a4edd2\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper641780a4edd2\Jean85\Version
    {
        return new \_PhpScoper641780a4edd2\Jean85\Version($packageName, \_PhpScoper641780a4edd2\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper641780a4edd2\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper641780a4edd2\Jean85\Version
    {
        return self::getVersion(\_PhpScoper641780a4edd2\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
