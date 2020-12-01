<?php

namespace _PhpScoper912e6d747d7e\Jean85;

use _PhpScoper912e6d747d7e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper912e6d747d7e\Jean85\Version
    {
        return new \_PhpScoper912e6d747d7e\Jean85\Version($packageName, \_PhpScoper912e6d747d7e\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper912e6d747d7e\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper912e6d747d7e\Jean85\Version
    {
        return self::getVersion(\_PhpScoper912e6d747d7e\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
