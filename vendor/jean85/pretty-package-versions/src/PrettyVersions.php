<?php

namespace _PhpScopereb7fcd8f999a\Jean85;

use _PhpScopereb7fcd8f999a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopereb7fcd8f999a\Jean85\Version
    {
        return new \_PhpScopereb7fcd8f999a\Jean85\Version($packageName, \_PhpScopereb7fcd8f999a\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScopereb7fcd8f999a\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScopereb7fcd8f999a\Jean85\Version
    {
        return self::getVersion(\_PhpScopereb7fcd8f999a\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
