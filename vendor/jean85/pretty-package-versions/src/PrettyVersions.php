<?php

namespace _PhpScoper860bc98a0f96\Jean85;

use _PhpScoper860bc98a0f96\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper860bc98a0f96\Jean85\Version
    {
        return new \_PhpScoper860bc98a0f96\Jean85\Version($packageName, \_PhpScoper860bc98a0f96\PackageVersions\Versions::getVersion($packageName));
    }
}
