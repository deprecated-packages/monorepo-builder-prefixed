<?php

namespace _PhpScopera2bd9a9af620\Jean85;

use _PhpScopera2bd9a9af620\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera2bd9a9af620\Jean85\Version
    {
        return new \_PhpScopera2bd9a9af620\Jean85\Version($packageName, \_PhpScopera2bd9a9af620\PackageVersions\Versions::getVersion($packageName));
    }
}
