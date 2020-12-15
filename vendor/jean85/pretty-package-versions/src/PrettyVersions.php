<?php

namespace _PhpScoperc51531d67326\Jean85;

use _PhpScoperc51531d67326\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc51531d67326\Jean85\Version
    {
        return new \_PhpScoperc51531d67326\Jean85\Version($packageName, \_PhpScoperc51531d67326\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc51531d67326\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc51531d67326\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc51531d67326\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
