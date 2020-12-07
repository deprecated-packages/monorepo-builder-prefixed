<?php

namespace _PhpScoperdab52924cf3e\Jean85;

use _PhpScoperdab52924cf3e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperdab52924cf3e\Jean85\Version
    {
        return new \_PhpScoperdab52924cf3e\Jean85\Version($packageName, \_PhpScoperdab52924cf3e\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperdab52924cf3e\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperdab52924cf3e\Jean85\Version
    {
        return self::getVersion(\_PhpScoperdab52924cf3e\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
