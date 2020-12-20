<?php

namespace _PhpScoperb73fd1606666\Jean85;

use _PhpScoperb73fd1606666\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb73fd1606666\Jean85\Version
    {
        return new \_PhpScoperb73fd1606666\Jean85\Version($packageName, \_PhpScoperb73fd1606666\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperb73fd1606666\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperb73fd1606666\Jean85\Version
    {
        return self::getVersion(\_PhpScoperb73fd1606666\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
