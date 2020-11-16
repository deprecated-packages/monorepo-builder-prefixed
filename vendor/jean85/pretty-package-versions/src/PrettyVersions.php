<?php

namespace _PhpScoper9a3298f96fa4\Jean85;

use _PhpScoper9a3298f96fa4\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper9a3298f96fa4\Jean85\Version
    {
        return new \_PhpScoper9a3298f96fa4\Jean85\Version($packageName, \_PhpScoper9a3298f96fa4\PackageVersions\Versions::getVersion($packageName));
    }
}
