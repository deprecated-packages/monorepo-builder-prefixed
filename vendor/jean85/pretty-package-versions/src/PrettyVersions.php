<?php

namespace _PhpScoper722a1d9fee2c\Jean85;

use _PhpScoper722a1d9fee2c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper722a1d9fee2c\Jean85\Version
    {
        return new \_PhpScoper722a1d9fee2c\Jean85\Version($packageName, \_PhpScoper722a1d9fee2c\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper722a1d9fee2c\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper722a1d9fee2c\Jean85\Version
    {
        return self::getVersion(\_PhpScoper722a1d9fee2c\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
