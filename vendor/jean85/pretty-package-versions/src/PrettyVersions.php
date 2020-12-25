<?php

namespace _PhpScoperef96225926e2\Jean85;

use _PhpScoperef96225926e2\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperef96225926e2\Jean85\Version
    {
        return new \_PhpScoperef96225926e2\Jean85\Version($packageName, \_PhpScoperef96225926e2\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperef96225926e2\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperef96225926e2\Jean85\Version
    {
        return self::getVersion(\_PhpScoperef96225926e2\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
