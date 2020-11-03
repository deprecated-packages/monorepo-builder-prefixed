<?php

namespace _PhpScoperb154859e1be7\Jean85;

use _PhpScoperb154859e1be7\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb154859e1be7\Jean85\Version
    {
        return new \_PhpScoperb154859e1be7\Jean85\Version($packageName, \_PhpScoperb154859e1be7\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperb154859e1be7\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperb154859e1be7\Jean85\Version
    {
        return self::getVersion(\_PhpScoperb154859e1be7\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
