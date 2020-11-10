<?php

namespace _PhpScopera31d0d6ff47a\Jean85;

use _PhpScopera31d0d6ff47a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera31d0d6ff47a\Jean85\Version
    {
        return new \_PhpScopera31d0d6ff47a\Jean85\Version($packageName, \_PhpScopera31d0d6ff47a\PackageVersions\Versions::getVersion($packageName));
    }
}
