<?php

namespace _PhpScoper39d95f01712b\Jean85;

use _PhpScoper39d95f01712b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper39d95f01712b\Jean85\Version
    {
        return new \_PhpScoper39d95f01712b\Jean85\Version($packageName, \_PhpScoper39d95f01712b\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper39d95f01712b\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper39d95f01712b\Jean85\Version
    {
        return self::getVersion(\_PhpScoper39d95f01712b\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
