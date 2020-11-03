<?php

namespace _PhpScoperd4e30d8318e8\Jean85;

use _PhpScoperd4e30d8318e8\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd4e30d8318e8\Jean85\Version
    {
        return new \_PhpScoperd4e30d8318e8\Jean85\Version($packageName, \_PhpScoperd4e30d8318e8\PackageVersions\Versions::getVersion($packageName));
    }
}
