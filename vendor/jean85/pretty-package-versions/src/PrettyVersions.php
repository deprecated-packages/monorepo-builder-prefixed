<?php

namespace _PhpScoper03a47c44ad4f\Jean85;

use _PhpScoper03a47c44ad4f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper03a47c44ad4f\Jean85\Version
    {
        return new \_PhpScoper03a47c44ad4f\Jean85\Version($packageName, \_PhpScoper03a47c44ad4f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper03a47c44ad4f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper03a47c44ad4f\Jean85\Version
    {
        return self::getVersion(\_PhpScoper03a47c44ad4f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
