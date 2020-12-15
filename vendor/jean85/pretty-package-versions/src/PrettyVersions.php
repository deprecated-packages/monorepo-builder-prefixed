<?php

namespace _PhpScopere1b4619561f2\Jean85;

use _PhpScopere1b4619561f2\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere1b4619561f2\Jean85\Version
    {
        return new \_PhpScopere1b4619561f2\Jean85\Version($packageName, \_PhpScopere1b4619561f2\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopere1b4619561f2\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopere1b4619561f2\Jean85\Version
    {
        return self::getVersion(\_PhpScopere1b4619561f2\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
