<?php

namespace _PhpScoper47e141fb470a\Jean85;

use _PhpScoper47e141fb470a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper47e141fb470a\Jean85\Version
    {
        return new \_PhpScoper47e141fb470a\Jean85\Version($packageName, \_PhpScoper47e141fb470a\PackageVersions\Versions::getVersion($packageName));
    }
}
