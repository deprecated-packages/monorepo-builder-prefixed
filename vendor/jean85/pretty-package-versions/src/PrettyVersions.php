<?php

namespace _PhpScoper905a278e297d\Jean85;

use _PhpScoper905a278e297d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper905a278e297d\Jean85\Version
    {
        return new \_PhpScoper905a278e297d\Jean85\Version($packageName, \_PhpScoper905a278e297d\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper905a278e297d\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper905a278e297d\Jean85\Version
    {
        return self::getVersion(\_PhpScoper905a278e297d\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
