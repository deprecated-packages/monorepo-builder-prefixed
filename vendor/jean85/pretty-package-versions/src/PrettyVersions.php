<?php

namespace _PhpScoper450cfab1c22b\Jean85;

use _PhpScoper450cfab1c22b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper450cfab1c22b\Jean85\Version
    {
        return new \_PhpScoper450cfab1c22b\Jean85\Version($packageName, \_PhpScoper450cfab1c22b\PackageVersions\Versions::getVersion($packageName));
    }
}
