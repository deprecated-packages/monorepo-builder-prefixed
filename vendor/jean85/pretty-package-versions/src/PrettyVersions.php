<?php

namespace _PhpScoper3a64dbb4e14f\Jean85;

use _PhpScoper3a64dbb4e14f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper3a64dbb4e14f\Jean85\Version
    {
        return new \_PhpScoper3a64dbb4e14f\Jean85\Version($packageName, \_PhpScoper3a64dbb4e14f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper3a64dbb4e14f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper3a64dbb4e14f\Jean85\Version
    {
        return self::getVersion(\_PhpScoper3a64dbb4e14f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
