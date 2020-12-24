<?php

namespace _PhpScoper69b0f14b2eca\Jean85;

use _PhpScoper69b0f14b2eca\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper69b0f14b2eca\Jean85\Version
    {
        return new \_PhpScoper69b0f14b2eca\Jean85\Version($packageName, \_PhpScoper69b0f14b2eca\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper69b0f14b2eca\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper69b0f14b2eca\Jean85\Version
    {
        return self::getVersion(\_PhpScoper69b0f14b2eca\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
