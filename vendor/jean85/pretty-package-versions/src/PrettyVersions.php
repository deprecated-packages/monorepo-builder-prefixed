<?php

namespace _PhpScoperb397db9687c8\Jean85;

use _PhpScoperb397db9687c8\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb397db9687c8\Jean85\Version
    {
        return new \_PhpScoperb397db9687c8\Jean85\Version($packageName, \_PhpScoperb397db9687c8\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperb397db9687c8\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperb397db9687c8\Jean85\Version
    {
        return self::getVersion(\_PhpScoperb397db9687c8\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
