<?php

namespace _PhpScoper68683f91c63d\Jean85;

use _PhpScoper68683f91c63d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper68683f91c63d\Jean85\Version
    {
        return new \_PhpScoper68683f91c63d\Jean85\Version($packageName, \_PhpScoper68683f91c63d\PackageVersions\Versions::getVersion($packageName));
    }
}
