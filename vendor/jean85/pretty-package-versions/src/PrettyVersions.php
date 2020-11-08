<?php

namespace _PhpScoper3c46f40844ed\Jean85;

use _PhpScoper3c46f40844ed\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper3c46f40844ed\Jean85\Version
    {
        return new \_PhpScoper3c46f40844ed\Jean85\Version($packageName, \_PhpScoper3c46f40844ed\PackageVersions\Versions::getVersion($packageName));
    }
}
