<?php

namespace _PhpScoperb9e77befe692\Jean85;

use _PhpScoperb9e77befe692\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb9e77befe692\Jean85\Version
    {
        return new \_PhpScoperb9e77befe692\Jean85\Version($packageName, \_PhpScoperb9e77befe692\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperb9e77befe692\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperb9e77befe692\Jean85\Version
    {
        return self::getVersion(\_PhpScoperb9e77befe692\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
