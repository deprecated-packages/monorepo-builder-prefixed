<?php

namespace _PhpScoper54d694ea578e\Jean85;

use _PhpScoper54d694ea578e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper54d694ea578e\Jean85\Version
    {
        return new \_PhpScoper54d694ea578e\Jean85\Version($packageName, \_PhpScoper54d694ea578e\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper54d694ea578e\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper54d694ea578e\Jean85\Version
    {
        return self::getVersion(\_PhpScoper54d694ea578e\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
