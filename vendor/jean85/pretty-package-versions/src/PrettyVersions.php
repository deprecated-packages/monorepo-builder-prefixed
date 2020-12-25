<?php

namespace _PhpScoper36281e29f54f\Jean85;

use _PhpScoper36281e29f54f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper36281e29f54f\Jean85\Version
    {
        return new \_PhpScoper36281e29f54f\Jean85\Version($packageName, \_PhpScoper36281e29f54f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper36281e29f54f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper36281e29f54f\Jean85\Version
    {
        return self::getVersion(\_PhpScoper36281e29f54f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
