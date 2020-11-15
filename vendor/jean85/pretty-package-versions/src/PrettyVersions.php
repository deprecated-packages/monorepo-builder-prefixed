<?php

namespace _PhpScoper9e91fe07dbdd\Jean85;

use _PhpScoper9e91fe07dbdd\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper9e91fe07dbdd\Jean85\Version
    {
        return new \_PhpScoper9e91fe07dbdd\Jean85\Version($packageName, \_PhpScoper9e91fe07dbdd\PackageVersions\Versions::getVersion($packageName));
    }
}
