<?php

namespace _PhpScoperaff2103cee1d\Jean85;

use _PhpScoperaff2103cee1d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperaff2103cee1d\Jean85\Version
    {
        return new \_PhpScoperaff2103cee1d\Jean85\Version($packageName, \_PhpScoperaff2103cee1d\PackageVersions\Versions::getVersion($packageName));
    }
}
