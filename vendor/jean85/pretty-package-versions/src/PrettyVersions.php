<?php

namespace _PhpScoper7606a7c2799b\Jean85;

use _PhpScoper7606a7c2799b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper7606a7c2799b\Jean85\Version
    {
        return new \_PhpScoper7606a7c2799b\Jean85\Version($packageName, \_PhpScoper7606a7c2799b\PackageVersions\Versions::getVersion($packageName));
    }
}
