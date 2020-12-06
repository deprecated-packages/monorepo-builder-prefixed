<?php

namespace _PhpScoper96a284484937\Jean85;

use _PhpScoper96a284484937\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper96a284484937\Jean85\Version
    {
        return new \_PhpScoper96a284484937\Jean85\Version($packageName, \_PhpScoper96a284484937\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper96a284484937\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper96a284484937\Jean85\Version
    {
        return self::getVersion(\_PhpScoper96a284484937\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
