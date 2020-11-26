<?php

namespace _PhpScoper97d4f3c5628a\Jean85;

use _PhpScoper97d4f3c5628a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper97d4f3c5628a\Jean85\Version
    {
        return new \_PhpScoper97d4f3c5628a\Jean85\Version($packageName, \_PhpScoper97d4f3c5628a\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper97d4f3c5628a\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper97d4f3c5628a\Jean85\Version
    {
        return self::getVersion(\_PhpScoper97d4f3c5628a\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
