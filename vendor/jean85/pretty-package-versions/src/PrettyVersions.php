<?php

namespace _PhpScoper1832ada183f6\Jean85;

use _PhpScoper1832ada183f6\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper1832ada183f6\Jean85\Version
    {
        return new \_PhpScoper1832ada183f6\Jean85\Version($packageName, \_PhpScoper1832ada183f6\PackageVersions\Versions::getVersion($packageName));
    }
}
