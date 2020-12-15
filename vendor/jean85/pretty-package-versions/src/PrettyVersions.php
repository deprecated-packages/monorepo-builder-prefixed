<?php

namespace _PhpScoper345e6b5f632f\Jean85;

use _PhpScoper345e6b5f632f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper345e6b5f632f\Jean85\Version
    {
        return new \_PhpScoper345e6b5f632f\Jean85\Version($packageName, \_PhpScoper345e6b5f632f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper345e6b5f632f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper345e6b5f632f\Jean85\Version
    {
        return self::getVersion(\_PhpScoper345e6b5f632f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
