<?php

namespace _PhpScoper540e5a7ff813\Jean85;

use _PhpScoper540e5a7ff813\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper540e5a7ff813\Jean85\Version
    {
        return new \_PhpScoper540e5a7ff813\Jean85\Version($packageName, \_PhpScoper540e5a7ff813\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper540e5a7ff813\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper540e5a7ff813\Jean85\Version
    {
        return self::getVersion(\_PhpScoper540e5a7ff813\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
