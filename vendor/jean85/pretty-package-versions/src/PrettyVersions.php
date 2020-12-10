<?php

namespace _PhpScoperc53cafc6ca57\Jean85;

use _PhpScoperc53cafc6ca57\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc53cafc6ca57\Jean85\Version
    {
        return new \_PhpScoperc53cafc6ca57\Jean85\Version($packageName, \_PhpScoperc53cafc6ca57\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc53cafc6ca57\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc53cafc6ca57\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc53cafc6ca57\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
