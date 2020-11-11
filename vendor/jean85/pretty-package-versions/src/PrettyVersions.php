<?php

namespace _PhpScoper5a7e73320450\Jean85;

use _PhpScoper5a7e73320450\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper5a7e73320450\Jean85\Version
    {
        return new \_PhpScoper5a7e73320450\Jean85\Version($packageName, \_PhpScoper5a7e73320450\PackageVersions\Versions::getVersion($packageName));
    }
}
