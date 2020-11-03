<?php

namespace _PhpScopere73d4c0b7ec8\Jean85;

use _PhpScopere73d4c0b7ec8\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere73d4c0b7ec8\Jean85\Version
    {
        return new \_PhpScopere73d4c0b7ec8\Jean85\Version($packageName, \_PhpScopere73d4c0b7ec8\PackageVersions\Versions::getVersion($packageName));
    }
}
