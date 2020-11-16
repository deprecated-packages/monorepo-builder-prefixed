<?php

namespace _PhpScoperb1086ecf2bcb\Jean85;

use _PhpScoperb1086ecf2bcb\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb1086ecf2bcb\Jean85\Version
    {
        return new \_PhpScoperb1086ecf2bcb\Jean85\Version($packageName, \_PhpScoperb1086ecf2bcb\PackageVersions\Versions::getVersion($packageName));
    }
}
