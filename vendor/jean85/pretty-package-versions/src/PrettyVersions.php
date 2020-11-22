<?php

namespace _PhpScoper29aa9f1ba53d\Jean85;

use _PhpScoper29aa9f1ba53d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper29aa9f1ba53d\Jean85\Version
    {
        return new \_PhpScoper29aa9f1ba53d\Jean85\Version($packageName, \_PhpScoper29aa9f1ba53d\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper29aa9f1ba53d\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper29aa9f1ba53d\Jean85\Version
    {
        return self::getVersion(\_PhpScoper29aa9f1ba53d\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
