<?php

namespace _PhpScoperb3e4472dbe9b\Jean85;

use _PhpScoperb3e4472dbe9b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb3e4472dbe9b\Jean85\Version
    {
        return new \_PhpScoperb3e4472dbe9b\Jean85\Version($packageName, \_PhpScoperb3e4472dbe9b\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperb3e4472dbe9b\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperb3e4472dbe9b\Jean85\Version
    {
        return self::getVersion(\_PhpScoperb3e4472dbe9b\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
