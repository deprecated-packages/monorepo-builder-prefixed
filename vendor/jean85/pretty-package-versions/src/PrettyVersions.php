<?php

namespace _PhpScopere9939b84e968\Jean85;

use _PhpScopere9939b84e968\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere9939b84e968\Jean85\Version
    {
        return new \_PhpScopere9939b84e968\Jean85\Version($packageName, \_PhpScopere9939b84e968\PackageVersions\Versions::getVersion($packageName));
    }
}
