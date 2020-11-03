<?php

namespace _PhpScoper6b2f62f5c7a4\Jean85;

use _PhpScoper6b2f62f5c7a4\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper6b2f62f5c7a4\Jean85\Version
    {
        return new \_PhpScoper6b2f62f5c7a4\Jean85\Version($packageName, \_PhpScoper6b2f62f5c7a4\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper6b2f62f5c7a4\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper6b2f62f5c7a4\Jean85\Version
    {
        return self::getVersion(\_PhpScoper6b2f62f5c7a4\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
