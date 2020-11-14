<?php

namespace _PhpScopera2f1d1d42b88\Jean85;

use _PhpScopera2f1d1d42b88\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera2f1d1d42b88\Jean85\Version
    {
        return new \_PhpScopera2f1d1d42b88\Jean85\Version($packageName, \_PhpScopera2f1d1d42b88\PackageVersions\Versions::getVersion($packageName));
    }
}
