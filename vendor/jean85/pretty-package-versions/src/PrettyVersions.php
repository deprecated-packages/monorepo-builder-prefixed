<?php

namespace _PhpScoper5da899d87662\Jean85;

use _PhpScoper5da899d87662\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper5da899d87662\Jean85\Version
    {
        return new \_PhpScoper5da899d87662\Jean85\Version($packageName, \_PhpScoper5da899d87662\PackageVersions\Versions::getVersion($packageName));
    }
}
