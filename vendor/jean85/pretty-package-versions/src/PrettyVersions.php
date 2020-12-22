<?php

namespace _PhpScoper674f850a9604\Jean85;

use _PhpScoper674f850a9604\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper674f850a9604\Jean85\Version
    {
        return new \_PhpScoper674f850a9604\Jean85\Version($packageName, \_PhpScoper674f850a9604\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper674f850a9604\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper674f850a9604\Jean85\Version
    {
        return self::getVersion(\_PhpScoper674f850a9604\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
