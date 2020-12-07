<?php

namespace _PhpScoper94f327c48d46\Jean85;

use _PhpScoper94f327c48d46\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper94f327c48d46\Jean85\Version
    {
        return new \_PhpScoper94f327c48d46\Jean85\Version($packageName, \_PhpScoper94f327c48d46\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper94f327c48d46\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper94f327c48d46\Jean85\Version
    {
        return self::getVersion(\_PhpScoper94f327c48d46\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
