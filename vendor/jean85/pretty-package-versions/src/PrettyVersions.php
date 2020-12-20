<?php

namespace _PhpScoper0217ecc5969a\Jean85;

use _PhpScoper0217ecc5969a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper0217ecc5969a\Jean85\Version
    {
        return new \_PhpScoper0217ecc5969a\Jean85\Version($packageName, \_PhpScoper0217ecc5969a\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper0217ecc5969a\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper0217ecc5969a\Jean85\Version
    {
        return self::getVersion(\_PhpScoper0217ecc5969a\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
