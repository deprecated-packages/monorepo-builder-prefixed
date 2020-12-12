<?php

namespace _PhpScoper7cc068f3f5d1\Jean85;

use _PhpScoper7cc068f3f5d1\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper7cc068f3f5d1\Jean85\Version
    {
        return new \_PhpScoper7cc068f3f5d1\Jean85\Version($packageName, \_PhpScoper7cc068f3f5d1\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper7cc068f3f5d1\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper7cc068f3f5d1\Jean85\Version
    {
        return self::getVersion(\_PhpScoper7cc068f3f5d1\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
