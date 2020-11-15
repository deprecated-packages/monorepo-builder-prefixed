<?php

namespace _PhpScoperb25e75e9febe\Jean85;

use _PhpScoperb25e75e9febe\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb25e75e9febe\Jean85\Version
    {
        return new \_PhpScoperb25e75e9febe\Jean85\Version($packageName, \_PhpScoperb25e75e9febe\PackageVersions\Versions::getVersion($packageName));
    }
}
