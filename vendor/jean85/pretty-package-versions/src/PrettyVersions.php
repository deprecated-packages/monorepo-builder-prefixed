<?php

namespace _PhpScoper80b6fe7627f7\Jean85;

use _PhpScoper80b6fe7627f7\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper80b6fe7627f7\Jean85\Version
    {
        return new \_PhpScoper80b6fe7627f7\Jean85\Version($packageName, \_PhpScoper80b6fe7627f7\PackageVersions\Versions::getVersion($packageName));
    }
}
