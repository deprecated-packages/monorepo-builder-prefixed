<?php

namespace _PhpScoper764e721c42e8\Jean85;

use _PhpScoper764e721c42e8\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper764e721c42e8\Jean85\Version
    {
        return new \_PhpScoper764e721c42e8\Jean85\Version($packageName, \_PhpScoper764e721c42e8\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper764e721c42e8\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper764e721c42e8\Jean85\Version
    {
        return self::getVersion(\_PhpScoper764e721c42e8\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
