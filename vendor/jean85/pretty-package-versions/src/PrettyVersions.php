<?php

namespace _PhpScoper130e101f3ca6\Jean85;

use _PhpScoper130e101f3ca6\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper130e101f3ca6\Jean85\Version
    {
        return new \_PhpScoper130e101f3ca6\Jean85\Version($packageName, \_PhpScoper130e101f3ca6\PackageVersions\Versions::getVersion($packageName));
    }
}
