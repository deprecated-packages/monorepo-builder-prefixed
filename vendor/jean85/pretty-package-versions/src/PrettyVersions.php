<?php

namespace _PhpScoperad3f32c1b87c\Jean85;

use _PhpScoperad3f32c1b87c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperad3f32c1b87c\Jean85\Version
    {
        return new \_PhpScoperad3f32c1b87c\Jean85\Version($packageName, \_PhpScoperad3f32c1b87c\PackageVersions\Versions::getVersion($packageName));
    }
}
