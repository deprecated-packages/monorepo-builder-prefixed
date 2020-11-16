<?php

namespace _PhpScoperd9ee792cdaf4\Jean85;

use _PhpScoperd9ee792cdaf4\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd9ee792cdaf4\Jean85\Version
    {
        return new \_PhpScoperd9ee792cdaf4\Jean85\Version($packageName, \_PhpScoperd9ee792cdaf4\PackageVersions\Versions::getVersion($packageName));
    }
}
