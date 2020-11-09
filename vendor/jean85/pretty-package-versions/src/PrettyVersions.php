<?php

namespace _PhpScoperedfa898a454f\Jean85;

use _PhpScoperedfa898a454f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperedfa898a454f\Jean85\Version
    {
        return new \_PhpScoperedfa898a454f\Jean85\Version($packageName, \_PhpScoperedfa898a454f\PackageVersions\Versions::getVersion($packageName));
    }
}
