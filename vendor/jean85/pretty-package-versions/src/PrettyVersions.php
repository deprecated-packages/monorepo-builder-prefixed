<?php

namespace _PhpScoperc86a79e2d6b2\Jean85;

use _PhpScoperc86a79e2d6b2\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc86a79e2d6b2\Jean85\Version
    {
        return new \_PhpScoperc86a79e2d6b2\Jean85\Version($packageName, \_PhpScoperc86a79e2d6b2\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc86a79e2d6b2\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc86a79e2d6b2\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc86a79e2d6b2\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
