<?php

namespace _PhpScoperf1163522a13e\Jean85;

use _PhpScoperf1163522a13e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf1163522a13e\Jean85\Version
    {
        return new \_PhpScoperf1163522a13e\Jean85\Version($packageName, \_PhpScoperf1163522a13e\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperf1163522a13e\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperf1163522a13e\Jean85\Version
    {
        return self::getVersion(\_PhpScoperf1163522a13e\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
