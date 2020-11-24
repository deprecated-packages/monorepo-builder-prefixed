<?php

namespace _PhpScoper674b08d66902\Jean85;

use _PhpScoper674b08d66902\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper674b08d66902\Jean85\Version
    {
        return new \_PhpScoper674b08d66902\Jean85\Version($packageName, \_PhpScoper674b08d66902\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper674b08d66902\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper674b08d66902\Jean85\Version
    {
        return self::getVersion(\_PhpScoper674b08d66902\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
