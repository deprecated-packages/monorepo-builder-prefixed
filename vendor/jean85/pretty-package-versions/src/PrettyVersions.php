<?php

namespace _PhpScoper120e1a259c7c\Jean85;

use _PhpScoper120e1a259c7c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper120e1a259c7c\Jean85\Version
    {
        return new \_PhpScoper120e1a259c7c\Jean85\Version($packageName, \_PhpScoper120e1a259c7c\PackageVersions\Versions::getVersion($packageName));
    }
}
