<?php

namespace _PhpScoperaf523e5605cc\Jean85;

use _PhpScoperaf523e5605cc\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperaf523e5605cc\Jean85\Version
    {
        return new \_PhpScoperaf523e5605cc\Jean85\Version($packageName, \_PhpScoperaf523e5605cc\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperaf523e5605cc\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperaf523e5605cc\Jean85\Version
    {
        return self::getVersion(\_PhpScoperaf523e5605cc\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
