<?php

namespace _PhpScoper5e83c3f77e04\Jean85;

use _PhpScoper5e83c3f77e04\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper5e83c3f77e04\Jean85\Version
    {
        return new \_PhpScoper5e83c3f77e04\Jean85\Version($packageName, \_PhpScoper5e83c3f77e04\PackageVersions\Versions::getVersion($packageName));
    }
}
