<?php

namespace _PhpScoperc693a7d83f11\Jean85;

use _PhpScoperc693a7d83f11\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc693a7d83f11\Jean85\Version
    {
        return new \_PhpScoperc693a7d83f11\Jean85\Version($packageName, \_PhpScoperc693a7d83f11\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperc693a7d83f11\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperc693a7d83f11\Jean85\Version
    {
        return self::getVersion(\_PhpScoperc693a7d83f11\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
