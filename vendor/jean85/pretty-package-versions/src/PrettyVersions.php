<?php

namespace _PhpScoper6713430bfe3d\Jean85;

use _PhpScoper6713430bfe3d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper6713430bfe3d\Jean85\Version
    {
        return new \_PhpScoper6713430bfe3d\Jean85\Version($packageName, \_PhpScoper6713430bfe3d\PackageVersions\Versions::getVersion($packageName));
    }
}
