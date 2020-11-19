<?php

namespace _PhpScoper0d4928f7af97\Jean85;

use _PhpScoper0d4928f7af97\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper0d4928f7af97\Jean85\Version
    {
        return new \_PhpScoper0d4928f7af97\Jean85\Version($packageName, \_PhpScoper0d4928f7af97\PackageVersions\Versions::getVersion($packageName));
    }
}
