<?php

namespace _PhpScoper462f168ef4cc\Jean85;

use _PhpScoper462f168ef4cc\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper462f168ef4cc\Jean85\Version
    {
        return new \_PhpScoper462f168ef4cc\Jean85\Version($packageName, \_PhpScoper462f168ef4cc\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper462f168ef4cc\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper462f168ef4cc\Jean85\Version
    {
        return self::getVersion(\_PhpScoper462f168ef4cc\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
