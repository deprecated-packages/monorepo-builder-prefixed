<?php

namespace _PhpScoperd659a053ca1c\Jean85;

use _PhpScoperd659a053ca1c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd659a053ca1c\Jean85\Version
    {
        return new \_PhpScoperd659a053ca1c\Jean85\Version($packageName, \_PhpScoperd659a053ca1c\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperd659a053ca1c\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperd659a053ca1c\Jean85\Version
    {
        return self::getVersion(\_PhpScoperd659a053ca1c\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
