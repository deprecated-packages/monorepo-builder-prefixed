<?php

namespace _PhpScoper82732e472d5e\Jean85;

use _PhpScoper82732e472d5e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper82732e472d5e\Jean85\Version
    {
        return new \_PhpScoper82732e472d5e\Jean85\Version($packageName, \_PhpScoper82732e472d5e\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper82732e472d5e\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper82732e472d5e\Jean85\Version
    {
        return self::getVersion(\_PhpScoper82732e472d5e\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
