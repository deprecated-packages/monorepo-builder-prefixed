<?php

namespace _PhpScoper8204af15e2b3\Jean85;

use _PhpScoper8204af15e2b3\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper8204af15e2b3\Jean85\Version
    {
        return new \_PhpScoper8204af15e2b3\Jean85\Version($packageName, \_PhpScoper8204af15e2b3\PackageVersions\Versions::getVersion($packageName));
    }
}
