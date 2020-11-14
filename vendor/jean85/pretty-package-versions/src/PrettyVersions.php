<?php

namespace _PhpScopera00544d51e07\Jean85;

use _PhpScopera00544d51e07\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera00544d51e07\Jean85\Version
    {
        return new \_PhpScopera00544d51e07\Jean85\Version($packageName, \_PhpScopera00544d51e07\PackageVersions\Versions::getVersion($packageName));
    }
}
