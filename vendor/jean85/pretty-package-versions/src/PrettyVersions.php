<?php

namespace _PhpScoper57793da194f3\Jean85;

use _PhpScoper57793da194f3\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper57793da194f3\Jean85\Version
    {
        return new \_PhpScoper57793da194f3\Jean85\Version($packageName, \_PhpScoper57793da194f3\PackageVersions\Versions::getVersion($packageName));
    }
}
