<?php

namespace _PhpScoper485f3a9238ad\Jean85;

use _PhpScoper485f3a9238ad\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper485f3a9238ad\Jean85\Version
    {
        return new \_PhpScoper485f3a9238ad\Jean85\Version($packageName, \_PhpScoper485f3a9238ad\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper485f3a9238ad\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper485f3a9238ad\Jean85\Version
    {
        return self::getVersion(\_PhpScoper485f3a9238ad\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
