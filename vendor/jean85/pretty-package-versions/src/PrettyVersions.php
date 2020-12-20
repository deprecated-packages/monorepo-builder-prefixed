<?php

namespace _PhpScoperb2067b9f36f8\Jean85;

use _PhpScoperb2067b9f36f8\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb2067b9f36f8\Jean85\Version
    {
        return new \_PhpScoperb2067b9f36f8\Jean85\Version($packageName, \_PhpScoperb2067b9f36f8\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperb2067b9f36f8\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperb2067b9f36f8\Jean85\Version
    {
        return self::getVersion(\_PhpScoperb2067b9f36f8\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
