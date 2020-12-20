<?php

namespace _PhpScoperc84013ed9ae7\Jean85;

use _PhpScoperc84013ed9ae7\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc84013ed9ae7\Jean85\Version
    {
        return new \_PhpScoperc84013ed9ae7\Jean85\Version($packageName, \_PhpScoperc84013ed9ae7\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc84013ed9ae7\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc84013ed9ae7\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc84013ed9ae7\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
