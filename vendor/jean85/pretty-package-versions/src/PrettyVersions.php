<?php

namespace _PhpScoper184bc0c88d68\Jean85;

use _PhpScoper184bc0c88d68\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper184bc0c88d68\Jean85\Version
    {
        return new \_PhpScoper184bc0c88d68\Jean85\Version($packageName, \_PhpScoper184bc0c88d68\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper184bc0c88d68\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper184bc0c88d68\Jean85\Version
    {
        return self::getVersion(\_PhpScoper184bc0c88d68\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
