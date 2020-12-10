<?php

namespace _PhpScoper84d68f9a1b63\Jean85;

use _PhpScoper84d68f9a1b63\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper84d68f9a1b63\Jean85\Version
    {
        return new \_PhpScoper84d68f9a1b63\Jean85\Version($packageName, \_PhpScoper84d68f9a1b63\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper84d68f9a1b63\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper84d68f9a1b63\Jean85\Version
    {
        return self::getVersion(\_PhpScoper84d68f9a1b63\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
