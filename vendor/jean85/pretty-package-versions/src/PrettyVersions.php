<?php

namespace _PhpScoper7ef219076398\Jean85;

use _PhpScoper7ef219076398\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper7ef219076398\Jean85\Version
    {
        return new \_PhpScoper7ef219076398\Jean85\Version($packageName, \_PhpScoper7ef219076398\PackageVersions\Versions::getVersion($packageName));
    }
}
