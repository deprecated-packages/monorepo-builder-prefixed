<?php

namespace _PhpScoperd0ff379dfdc7\Jean85;

use _PhpScoperd0ff379dfdc7\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd0ff379dfdc7\Jean85\Version
    {
        return new \_PhpScoperd0ff379dfdc7\Jean85\Version($packageName, \_PhpScoperd0ff379dfdc7\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperd0ff379dfdc7\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperd0ff379dfdc7\Jean85\Version
    {
        return self::getVersion(\_PhpScoperd0ff379dfdc7\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
