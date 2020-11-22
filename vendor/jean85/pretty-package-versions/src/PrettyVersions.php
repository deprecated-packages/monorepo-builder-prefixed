<?php

namespace _PhpScoper66a1b4bf441c\Jean85;

use _PhpScoper66a1b4bf441c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper66a1b4bf441c\Jean85\Version
    {
        return new \_PhpScoper66a1b4bf441c\Jean85\Version($packageName, \_PhpScoper66a1b4bf441c\PackageVersions\Versions::getVersion($packageName));
    }
}
