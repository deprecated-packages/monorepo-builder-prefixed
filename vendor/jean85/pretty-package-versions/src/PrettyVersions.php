<?php

namespace _PhpScoper716f383f1097\Jean85;

use _PhpScoper716f383f1097\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper716f383f1097\Jean85\Version
    {
        return new \_PhpScoper716f383f1097\Jean85\Version($packageName, \_PhpScoper716f383f1097\PackageVersions\Versions::getVersion($packageName));
    }
}
