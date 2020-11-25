<?php

namespace _PhpScoper44b9ade4c89e\Jean85;

use _PhpScoper44b9ade4c89e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper44b9ade4c89e\Jean85\Version
    {
        return new \_PhpScoper44b9ade4c89e\Jean85\Version($packageName, \_PhpScoper44b9ade4c89e\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper44b9ade4c89e\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper44b9ade4c89e\Jean85\Version
    {
        return self::getVersion(\_PhpScoper44b9ade4c89e\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
