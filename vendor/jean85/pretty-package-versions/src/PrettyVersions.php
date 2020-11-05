<?php

namespace _PhpScoper22d98a58be40\Jean85;

use _PhpScoper22d98a58be40\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper22d98a58be40\Jean85\Version
    {
        return new \_PhpScoper22d98a58be40\Jean85\Version($packageName, \_PhpScoper22d98a58be40\PackageVersions\Versions::getVersion($packageName));
    }
}
