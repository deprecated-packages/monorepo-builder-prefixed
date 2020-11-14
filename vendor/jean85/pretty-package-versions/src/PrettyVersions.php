<?php

namespace _PhpScoper3901c1bd2445\Jean85;

use _PhpScoper3901c1bd2445\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper3901c1bd2445\Jean85\Version
    {
        return new \_PhpScoper3901c1bd2445\Jean85\Version($packageName, \_PhpScoper3901c1bd2445\PackageVersions\Versions::getVersion($packageName));
    }
}
