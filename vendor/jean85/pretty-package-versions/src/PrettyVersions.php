<?php

namespace _PhpScopercdfd316eda69\Jean85;

use _PhpScopercdfd316eda69\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopercdfd316eda69\Jean85\Version
    {
        return new \_PhpScopercdfd316eda69\Jean85\Version($packageName, \_PhpScopercdfd316eda69\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopercdfd316eda69\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopercdfd316eda69\Jean85\Version
    {
        return self::getVersion(\_PhpScopercdfd316eda69\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
