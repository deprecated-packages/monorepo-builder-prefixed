<?php

namespace _PhpScoper503cab241f82\Jean85;

use _PhpScoper503cab241f82\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper503cab241f82\Jean85\Version
    {
        return new \_PhpScoper503cab241f82\Jean85\Version($packageName, \_PhpScoper503cab241f82\PackageVersions\Versions::getVersion($packageName));
    }
}
