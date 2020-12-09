<?php

namespace _PhpScoper62cf10e7b378\Jean85;

use _PhpScoper62cf10e7b378\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper62cf10e7b378\Jean85\Version
    {
        return new \_PhpScoper62cf10e7b378\Jean85\Version($packageName, \_PhpScoper62cf10e7b378\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper62cf10e7b378\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper62cf10e7b378\Jean85\Version
    {
        return self::getVersion(\_PhpScoper62cf10e7b378\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
