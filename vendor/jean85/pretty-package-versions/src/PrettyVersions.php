<?php

namespace _PhpScoperfa7966ff486f\Jean85;

use _PhpScoperfa7966ff486f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperfa7966ff486f\Jean85\Version
    {
        return new \_PhpScoperfa7966ff486f\Jean85\Version($packageName, \_PhpScoperfa7966ff486f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperfa7966ff486f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperfa7966ff486f\Jean85\Version
    {
        return self::getVersion(\_PhpScoperfa7966ff486f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
