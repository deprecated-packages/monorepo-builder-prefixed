<?php

namespace _PhpScopercd844fca8af3\Jean85;

use _PhpScopercd844fca8af3\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopercd844fca8af3\Jean85\Version
    {
        return new \_PhpScopercd844fca8af3\Jean85\Version($packageName, \_PhpScopercd844fca8af3\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopercd844fca8af3\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopercd844fca8af3\Jean85\Version
    {
        return self::getVersion(\_PhpScopercd844fca8af3\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
