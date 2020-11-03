<?php

namespace _PhpScoper131024327b3f\Jean85;

use _PhpScoper131024327b3f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper131024327b3f\Jean85\Version
    {
        return new \_PhpScoper131024327b3f\Jean85\Version($packageName, \_PhpScoper131024327b3f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper131024327b3f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper131024327b3f\Jean85\Version
    {
        return self::getVersion(\_PhpScoper131024327b3f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
