<?php

namespace _PhpScoperdf352df6d893\Jean85;

use _PhpScoperdf352df6d893\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperdf352df6d893\Jean85\Version
    {
        return new \_PhpScoperdf352df6d893\Jean85\Version($packageName, \_PhpScoperdf352df6d893\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperdf352df6d893\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperdf352df6d893\Jean85\Version
    {
        return self::getVersion(\_PhpScoperdf352df6d893\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
