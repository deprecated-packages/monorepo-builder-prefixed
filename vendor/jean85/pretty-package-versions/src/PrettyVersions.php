<?php

namespace _PhpScoper3ceab9fdc42a\Jean85;

use _PhpScoper3ceab9fdc42a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper3ceab9fdc42a\Jean85\Version
    {
        return new \_PhpScoper3ceab9fdc42a\Jean85\Version($packageName, \_PhpScoper3ceab9fdc42a\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper3ceab9fdc42a\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper3ceab9fdc42a\Jean85\Version
    {
        return self::getVersion(\_PhpScoper3ceab9fdc42a\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
