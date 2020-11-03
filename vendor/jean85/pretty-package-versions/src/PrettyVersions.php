<?php

namespace _PhpScoper138e2990dbdb\Jean85;

use _PhpScoper138e2990dbdb\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper138e2990dbdb\Jean85\Version
    {
        return new \_PhpScoper138e2990dbdb\Jean85\Version($packageName, \_PhpScoper138e2990dbdb\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper138e2990dbdb\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper138e2990dbdb\Jean85\Version
    {
        return self::getVersion(\_PhpScoper138e2990dbdb\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
