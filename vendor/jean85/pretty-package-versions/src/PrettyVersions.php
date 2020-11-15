<?php

namespace _PhpScoper31a2d0e8f655\Jean85;

use _PhpScoper31a2d0e8f655\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper31a2d0e8f655\Jean85\Version
    {
        return new \_PhpScoper31a2d0e8f655\Jean85\Version($packageName, \_PhpScoper31a2d0e8f655\PackageVersions\Versions::getVersion($packageName));
    }
}
