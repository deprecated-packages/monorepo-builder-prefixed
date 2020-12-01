<?php

namespace _PhpScoperd8a347ec1761\Jean85;

use _PhpScoperd8a347ec1761\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd8a347ec1761\Jean85\Version
    {
        return new \_PhpScoperd8a347ec1761\Jean85\Version($packageName, \_PhpScoperd8a347ec1761\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperd8a347ec1761\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperd8a347ec1761\Jean85\Version
    {
        return self::getVersion(\_PhpScoperd8a347ec1761\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
