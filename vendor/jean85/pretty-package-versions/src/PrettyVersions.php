<?php

namespace _PhpScoperc00d4390f333\Jean85;

use _PhpScoperc00d4390f333\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc00d4390f333\Jean85\Version
    {
        return new \_PhpScoperc00d4390f333\Jean85\Version($packageName, \_PhpScoperc00d4390f333\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc00d4390f333\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc00d4390f333\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc00d4390f333\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
