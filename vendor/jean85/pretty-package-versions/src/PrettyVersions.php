<?php

namespace _PhpScoper47ce95ac3375\Jean85;

use _PhpScoper47ce95ac3375\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper47ce95ac3375\Jean85\Version
    {
        return new \_PhpScoper47ce95ac3375\Jean85\Version($packageName, \_PhpScoper47ce95ac3375\PackageVersions\Versions::getVersion($packageName));
    }
}
