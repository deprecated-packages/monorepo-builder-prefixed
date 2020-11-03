<?php

namespace _PhpScoperf2e2fcfe7ee6\Jean85;

use _PhpScoperf2e2fcfe7ee6\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf2e2fcfe7ee6\Jean85\Version
    {
        return new \_PhpScoperf2e2fcfe7ee6\Jean85\Version($packageName, \_PhpScoperf2e2fcfe7ee6\PackageVersions\Versions::getVersion($packageName));
    }
}
