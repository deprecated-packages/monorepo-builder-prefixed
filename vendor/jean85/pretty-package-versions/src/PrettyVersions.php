<?php

namespace _PhpScoper55b61aca61e8\Jean85;

use _PhpScoper55b61aca61e8\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper55b61aca61e8\Jean85\Version
    {
        return new \_PhpScoper55b61aca61e8\Jean85\Version($packageName, \_PhpScoper55b61aca61e8\PackageVersions\Versions::getVersion($packageName));
    }
}
