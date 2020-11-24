<?php

namespace _PhpScoper963537526adf\Jean85;

use _PhpScoper963537526adf\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper963537526adf\Jean85\Version
    {
        return new \_PhpScoper963537526adf\Jean85\Version($packageName, \_PhpScoper963537526adf\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper963537526adf\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper963537526adf\Jean85\Version
    {
        return self::getVersion(\_PhpScoper963537526adf\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
