<?php

namespace _PhpScoperbb737891eded\Jean85;

use _PhpScoperbb737891eded\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperbb737891eded\Jean85\Version
    {
        return new \_PhpScoperbb737891eded\Jean85\Version($packageName, \_PhpScoperbb737891eded\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperbb737891eded\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperbb737891eded\Jean85\Version
    {
        return self::getVersion(\_PhpScoperbb737891eded\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
