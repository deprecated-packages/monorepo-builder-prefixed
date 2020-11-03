<?php

namespace _PhpScoper0d74dc701629\Jean85;

use _PhpScoper0d74dc701629\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper0d74dc701629\Jean85\Version
    {
        return new \_PhpScoper0d74dc701629\Jean85\Version($packageName, \_PhpScoper0d74dc701629\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper0d74dc701629\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper0d74dc701629\Jean85\Version
    {
        return self::getVersion(\_PhpScoper0d74dc701629\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
