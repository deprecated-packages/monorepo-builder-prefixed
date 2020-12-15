<?php

namespace _PhpScoperc0c27da9e1f7\Jean85;

use _PhpScoperc0c27da9e1f7\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc0c27da9e1f7\Jean85\Version
    {
        return new \_PhpScoperc0c27da9e1f7\Jean85\Version($packageName, \_PhpScoperc0c27da9e1f7\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc0c27da9e1f7\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc0c27da9e1f7\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc0c27da9e1f7\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
