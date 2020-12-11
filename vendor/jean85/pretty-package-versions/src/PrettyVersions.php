<?php

namespace _PhpScoper204b3b8f3e0d\Jean85;

use _PhpScoper204b3b8f3e0d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper204b3b8f3e0d\Jean85\Version
    {
        return new \_PhpScoper204b3b8f3e0d\Jean85\Version($packageName, \_PhpScoper204b3b8f3e0d\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper204b3b8f3e0d\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper204b3b8f3e0d\Jean85\Version
    {
        return self::getVersion(\_PhpScoper204b3b8f3e0d\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
