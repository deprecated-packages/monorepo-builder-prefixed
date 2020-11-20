<?php

namespace _PhpScopercdc90a6628b6\Jean85;

use _PhpScopercdc90a6628b6\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopercdc90a6628b6\Jean85\Version
    {
        return new \_PhpScopercdc90a6628b6\Jean85\Version($packageName, \_PhpScopercdc90a6628b6\PackageVersions\Versions::getVersion($packageName));
    }
}
