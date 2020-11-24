<?php

namespace _PhpScoper3c696cbcc510\Jean85;

use _PhpScoper3c696cbcc510\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper3c696cbcc510\Jean85\Version
    {
        return new \_PhpScoper3c696cbcc510\Jean85\Version($packageName, \_PhpScoper3c696cbcc510\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper3c696cbcc510\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper3c696cbcc510\Jean85\Version
    {
        return self::getVersion(\_PhpScoper3c696cbcc510\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
