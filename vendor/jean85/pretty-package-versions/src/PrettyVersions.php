<?php

namespace _PhpScoper95e170f0b4ac\Jean85;

use _PhpScoper95e170f0b4ac\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper95e170f0b4ac\Jean85\Version
    {
        return new \_PhpScoper95e170f0b4ac\Jean85\Version($packageName, \_PhpScoper95e170f0b4ac\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper95e170f0b4ac\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper95e170f0b4ac\Jean85\Version
    {
        return self::getVersion(\_PhpScoper95e170f0b4ac\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
