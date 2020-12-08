<?php

namespace _PhpScoper78864f032ec6\Jean85;

use _PhpScoper78864f032ec6\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper78864f032ec6\Jean85\Version
    {
        return new \_PhpScoper78864f032ec6\Jean85\Version($packageName, \_PhpScoper78864f032ec6\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper78864f032ec6\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper78864f032ec6\Jean85\Version
    {
        return self::getVersion(\_PhpScoper78864f032ec6\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
