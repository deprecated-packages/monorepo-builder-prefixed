<?php

namespace _PhpScoper7aa910bab0da\Jean85;

use _PhpScoper7aa910bab0da\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper7aa910bab0da\Jean85\Version
    {
        return new \_PhpScoper7aa910bab0da\Jean85\Version($packageName, \_PhpScoper7aa910bab0da\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper7aa910bab0da\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper7aa910bab0da\Jean85\Version
    {
        return self::getVersion(\_PhpScoper7aa910bab0da\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
