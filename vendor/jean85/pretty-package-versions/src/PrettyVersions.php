<?php

namespace _PhpScoper9175a5176ce9\Jean85;

use _PhpScoper9175a5176ce9\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper9175a5176ce9\Jean85\Version
    {
        return new \_PhpScoper9175a5176ce9\Jean85\Version($packageName, \_PhpScoper9175a5176ce9\PackageVersions\Versions::getVersion($packageName));
    }
}
