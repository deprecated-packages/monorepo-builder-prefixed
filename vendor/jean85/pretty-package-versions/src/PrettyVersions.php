<?php

namespace _PhpScoperfd1a6a0ee9af\Jean85;

use _PhpScoperfd1a6a0ee9af\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperfd1a6a0ee9af\Jean85\Version
    {
        return new \_PhpScoperfd1a6a0ee9af\Jean85\Version($packageName, \_PhpScoperfd1a6a0ee9af\PackageVersions\Versions::getVersion($packageName));
    }
}
