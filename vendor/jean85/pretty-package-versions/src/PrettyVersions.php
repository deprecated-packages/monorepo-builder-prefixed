<?php

namespace _PhpScoperef4638f5d8b1\Jean85;

use _PhpScoperef4638f5d8b1\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperef4638f5d8b1\Jean85\Version
    {
        return new \_PhpScoperef4638f5d8b1\Jean85\Version($packageName, \_PhpScoperef4638f5d8b1\PackageVersions\Versions::getVersion($packageName));
    }
}
