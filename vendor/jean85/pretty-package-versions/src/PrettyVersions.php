<?php

namespace _PhpScoper98290f688d14\Jean85;

use _PhpScoper98290f688d14\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper98290f688d14\Jean85\Version
    {
        return new \_PhpScoper98290f688d14\Jean85\Version($packageName, \_PhpScoper98290f688d14\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper98290f688d14\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper98290f688d14\Jean85\Version
    {
        return self::getVersion(\_PhpScoper98290f688d14\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
