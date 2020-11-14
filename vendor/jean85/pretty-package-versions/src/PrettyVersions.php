<?php

namespace _PhpScoperae7532b8c744\Jean85;

use _PhpScoperae7532b8c744\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperae7532b8c744\Jean85\Version
    {
        return new \_PhpScoperae7532b8c744\Jean85\Version($packageName, \_PhpScoperae7532b8c744\PackageVersions\Versions::getVersion($packageName));
    }
}
