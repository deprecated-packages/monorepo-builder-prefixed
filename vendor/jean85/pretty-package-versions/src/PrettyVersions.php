<?php

namespace _PhpScoperff72c38d4e2a\Jean85;

use _PhpScoperff72c38d4e2a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperff72c38d4e2a\Jean85\Version
    {
        return new \_PhpScoperff72c38d4e2a\Jean85\Version($packageName, \_PhpScoperff72c38d4e2a\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperff72c38d4e2a\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperff72c38d4e2a\Jean85\Version
    {
        return self::getVersion(\_PhpScoperff72c38d4e2a\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
