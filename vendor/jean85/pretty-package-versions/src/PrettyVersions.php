<?php

namespace _PhpScoperab93339c6bca\Jean85;

use _PhpScoperab93339c6bca\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperab93339c6bca\Jean85\Version
    {
        return new \_PhpScoperab93339c6bca\Jean85\Version($packageName, \_PhpScoperab93339c6bca\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperab93339c6bca\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperab93339c6bca\Jean85\Version
    {
        return self::getVersion(\_PhpScoperab93339c6bca\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
