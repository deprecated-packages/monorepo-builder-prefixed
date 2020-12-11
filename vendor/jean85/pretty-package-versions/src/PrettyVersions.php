<?php

namespace _PhpScoper018f70acf6cc\Jean85;

use _PhpScoper018f70acf6cc\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper018f70acf6cc\Jean85\Version
    {
        return new \_PhpScoper018f70acf6cc\Jean85\Version($packageName, \_PhpScoper018f70acf6cc\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper018f70acf6cc\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper018f70acf6cc\Jean85\Version
    {
        return self::getVersion(\_PhpScoper018f70acf6cc\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
