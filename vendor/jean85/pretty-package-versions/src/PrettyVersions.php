<?php

namespace _PhpScoperc41e8050ff3f\Jean85;

use _PhpScoperc41e8050ff3f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc41e8050ff3f\Jean85\Version
    {
        return new \_PhpScoperc41e8050ff3f\Jean85\Version($packageName, \_PhpScoperc41e8050ff3f\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc41e8050ff3f\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc41e8050ff3f\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc41e8050ff3f\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
