<?php

namespace _PhpScopere8131a326633\Jean85;

use _PhpScopere8131a326633\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere8131a326633\Jean85\Version
    {
        return new \_PhpScopere8131a326633\Jean85\Version($packageName, \_PhpScopere8131a326633\PackageVersions\Versions::getVersion($packageName));
    }
}
