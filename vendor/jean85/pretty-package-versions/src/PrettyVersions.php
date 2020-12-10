<?php

namespace _PhpScoper53a6895b9c5b\Jean85;

use _PhpScoper53a6895b9c5b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper53a6895b9c5b\Jean85\Version
    {
        return new \_PhpScoper53a6895b9c5b\Jean85\Version($packageName, \_PhpScoper53a6895b9c5b\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper53a6895b9c5b\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper53a6895b9c5b\Jean85\Version
    {
        return self::getVersion(\_PhpScoper53a6895b9c5b\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
