<?php

namespace _PhpScoper0f23ef1f1d10\Jean85;

use _PhpScoper0f23ef1f1d10\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper0f23ef1f1d10\Jean85\Version
    {
        return new \_PhpScoper0f23ef1f1d10\Jean85\Version($packageName, \_PhpScoper0f23ef1f1d10\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper0f23ef1f1d10\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper0f23ef1f1d10\Jean85\Version
    {
        return self::getVersion(\_PhpScoper0f23ef1f1d10\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
