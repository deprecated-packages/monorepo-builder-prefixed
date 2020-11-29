<?php

namespace _PhpScoperf4997c409394\Jean85;

use _PhpScoperf4997c409394\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf4997c409394\Jean85\Version
    {
        return new \_PhpScoperf4997c409394\Jean85\Version($packageName, \_PhpScoperf4997c409394\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperf4997c409394\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperf4997c409394\Jean85\Version
    {
        return self::getVersion(\_PhpScoperf4997c409394\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
