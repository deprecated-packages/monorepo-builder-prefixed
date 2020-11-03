<?php

namespace _PhpScoper43a95e2f69bc\Jean85;

use _PhpScoper43a95e2f69bc\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper43a95e2f69bc\Jean85\Version
    {
        return new \_PhpScoper43a95e2f69bc\Jean85\Version($packageName, \_PhpScoper43a95e2f69bc\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoper43a95e2f69bc\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoper43a95e2f69bc\Jean85\Version
    {
        return self::getVersion(\_PhpScoper43a95e2f69bc\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
