<?php

namespace _PhpScoper847a0f3260b6\Jean85;

use _PhpScoper847a0f3260b6\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper847a0f3260b6\Jean85\Version
    {
        return new \_PhpScoper847a0f3260b6\Jean85\Version($packageName, \_PhpScoper847a0f3260b6\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper847a0f3260b6\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper847a0f3260b6\Jean85\Version
    {
        return self::getVersion(\_PhpScoper847a0f3260b6\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
