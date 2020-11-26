<?php

namespace _PhpScoper8a1d608a1a7e\Jean85;

use _PhpScoper8a1d608a1a7e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper8a1d608a1a7e\Jean85\Version
    {
        return new \_PhpScoper8a1d608a1a7e\Jean85\Version($packageName, \_PhpScoper8a1d608a1a7e\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper8a1d608a1a7e\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper8a1d608a1a7e\Jean85\Version
    {
        return self::getVersion(\_PhpScoper8a1d608a1a7e\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
