<?php

namespace _PhpScoperb0229f14f861\Jean85;

use _PhpScoperb0229f14f861\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb0229f14f861\Jean85\Version
    {
        return new \_PhpScoperb0229f14f861\Jean85\Version($packageName, \_PhpScoperb0229f14f861\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperb0229f14f861\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperb0229f14f861\Jean85\Version
    {
        return self::getVersion(\_PhpScoperb0229f14f861\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
