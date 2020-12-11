<?php

namespace _PhpScoper354754c20063\Jean85;

use _PhpScoper354754c20063\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper354754c20063\Jean85\Version
    {
        return new \_PhpScoper354754c20063\Jean85\Version($packageName, \_PhpScoper354754c20063\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper354754c20063\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper354754c20063\Jean85\Version
    {
        return self::getVersion(\_PhpScoper354754c20063\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
