<?php

namespace _PhpScoperdbf49b510e11\Jean85;

use _PhpScoperdbf49b510e11\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperdbf49b510e11\Jean85\Version
    {
        return new \_PhpScoperdbf49b510e11\Jean85\Version($packageName, \_PhpScoperdbf49b510e11\PackageVersions\Versions::getVersion($packageName));
    }
}
