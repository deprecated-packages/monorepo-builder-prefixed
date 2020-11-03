<?php

namespace _PhpScoper323d4c178bee\Jean85;

use _PhpScoper323d4c178bee\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper323d4c178bee\Jean85\Version
    {
        return new \_PhpScoper323d4c178bee\Jean85\Version($packageName, \_PhpScoper323d4c178bee\PackageVersions\Versions::getVersion($packageName));
    }
}
