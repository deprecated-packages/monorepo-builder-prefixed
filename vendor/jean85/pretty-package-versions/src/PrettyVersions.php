<?php

namespace _PhpScoperda849baa4a45\Jean85;

use _PhpScoperda849baa4a45\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperda849baa4a45\Jean85\Version
    {
        return new \_PhpScoperda849baa4a45\Jean85\Version($packageName, \_PhpScoperda849baa4a45\PackageVersions\Versions::getVersion($packageName));
    }
}
