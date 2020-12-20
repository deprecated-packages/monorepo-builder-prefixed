<?php

namespace _PhpScoper955845c5b45f\Jean85;

use _PhpScoper955845c5b45f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper955845c5b45f\Jean85\Version
    {
        return new \_PhpScoper955845c5b45f\Jean85\Version($packageName, \_PhpScoper955845c5b45f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper955845c5b45f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper955845c5b45f\Jean85\Version
    {
        return self::getVersion(\_PhpScoper955845c5b45f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
