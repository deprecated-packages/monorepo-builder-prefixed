<?php

namespace _PhpScoper00f012948171\Jean85;

use _PhpScoper00f012948171\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper00f012948171\Jean85\Version
    {
        return new \_PhpScoper00f012948171\Jean85\Version($packageName, \_PhpScoper00f012948171\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper00f012948171\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper00f012948171\Jean85\Version
    {
        return self::getVersion(\_PhpScoper00f012948171\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
