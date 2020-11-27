<?php

namespace _PhpScoperaa2560a8a931\Jean85;

use _PhpScoperaa2560a8a931\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperaa2560a8a931\Jean85\Version
    {
        return new \_PhpScoperaa2560a8a931\Jean85\Version($packageName, \_PhpScoperaa2560a8a931\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperaa2560a8a931\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperaa2560a8a931\Jean85\Version
    {
        return self::getVersion(\_PhpScoperaa2560a8a931\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
