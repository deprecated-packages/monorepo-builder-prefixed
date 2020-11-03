<?php

namespace _PhpScoperee8f03533f8b\Jean85;

use _PhpScoperee8f03533f8b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperee8f03533f8b\Jean85\Version
    {
        return new \_PhpScoperee8f03533f8b\Jean85\Version($packageName, \_PhpScoperee8f03533f8b\PackageVersions\Versions::getVersion($packageName));
    }
}
