<?php

namespace _PhpScopere32570efa19a\Jean85;

use _PhpScopere32570efa19a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere32570efa19a\Jean85\Version
    {
        return new \_PhpScopere32570efa19a\Jean85\Version($packageName, \_PhpScopere32570efa19a\PackageVersions\Versions::getVersion($packageName));
    }
}
