<?php

namespace _PhpScoperc9dc9dec1b4a\Jean85;

use _PhpScoperc9dc9dec1b4a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc9dc9dec1b4a\Jean85\Version
    {
        return new \_PhpScoperc9dc9dec1b4a\Jean85\Version($packageName, \_PhpScoperc9dc9dec1b4a\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc9dc9dec1b4a\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc9dc9dec1b4a\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc9dc9dec1b4a\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
