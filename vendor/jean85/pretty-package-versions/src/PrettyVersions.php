<?php

namespace _PhpScoperdfa889d8967a\Jean85;

use _PhpScoperdfa889d8967a\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperdfa889d8967a\Jean85\Version
    {
        return new \_PhpScoperdfa889d8967a\Jean85\Version($packageName, \_PhpScoperdfa889d8967a\PackageVersions\Versions::getVersion($packageName));
    }
}
