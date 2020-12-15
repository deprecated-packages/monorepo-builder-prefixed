<?php

namespace _PhpScoperc7f1624089a3\Jean85;

use _PhpScoperc7f1624089a3\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc7f1624089a3\Jean85\Version
    {
        return new \_PhpScoperc7f1624089a3\Jean85\Version($packageName, \_PhpScoperc7f1624089a3\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc7f1624089a3\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc7f1624089a3\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc7f1624089a3\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
