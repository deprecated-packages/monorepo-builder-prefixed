<?php

namespace _PhpScoper12b9214dc5a9\Jean85;

use _PhpScoper12b9214dc5a9\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper12b9214dc5a9\Jean85\Version
    {
        return new \_PhpScoper12b9214dc5a9\Jean85\Version($packageName, \_PhpScoper12b9214dc5a9\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper12b9214dc5a9\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper12b9214dc5a9\Jean85\Version
    {
        return self::getVersion(\_PhpScoper12b9214dc5a9\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
