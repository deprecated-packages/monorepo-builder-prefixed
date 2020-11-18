<?php

namespace _PhpScoper600b802aef08\Jean85;

use _PhpScoper600b802aef08\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper600b802aef08\Jean85\Version
    {
        return new \_PhpScoper600b802aef08\Jean85\Version($packageName, \_PhpScoper600b802aef08\PackageVersions\Versions::getVersion($packageName));
    }
}
