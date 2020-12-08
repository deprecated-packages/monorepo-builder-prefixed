<?php

namespace _PhpScoperfa13b4bfa005\Jean85;

use _PhpScoperfa13b4bfa005\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperfa13b4bfa005\Jean85\Version
    {
        return new \_PhpScoperfa13b4bfa005\Jean85\Version($packageName, \_PhpScoperfa13b4bfa005\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperfa13b4bfa005\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperfa13b4bfa005\Jean85\Version
    {
        return self::getVersion(\_PhpScoperfa13b4bfa005\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
