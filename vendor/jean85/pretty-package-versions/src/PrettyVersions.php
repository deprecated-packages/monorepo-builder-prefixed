<?php

namespace _PhpScoperd607abf1de8e\Jean85;

use _PhpScoperd607abf1de8e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd607abf1de8e\Jean85\Version
    {
        return new \_PhpScoperd607abf1de8e\Jean85\Version($packageName, \_PhpScoperd607abf1de8e\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperd607abf1de8e\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperd607abf1de8e\Jean85\Version
    {
        return self::getVersion(\_PhpScoperd607abf1de8e\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
