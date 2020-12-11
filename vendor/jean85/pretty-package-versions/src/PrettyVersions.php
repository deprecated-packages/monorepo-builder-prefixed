<?php

namespace _PhpScoperc8aee0bf0015\Jean85;

use _PhpScoperc8aee0bf0015\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc8aee0bf0015\Jean85\Version
    {
        return new \_PhpScoperc8aee0bf0015\Jean85\Version($packageName, \_PhpScoperc8aee0bf0015\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc8aee0bf0015\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc8aee0bf0015\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc8aee0bf0015\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
