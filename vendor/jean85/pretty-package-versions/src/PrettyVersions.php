<?php

namespace _PhpScoper4a734d287afc\Jean85;

use _PhpScoper4a734d287afc\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper4a734d287afc\Jean85\Version
    {
        return new \_PhpScoper4a734d287afc\Jean85\Version($packageName, \_PhpScoper4a734d287afc\PackageVersions\Versions::getVersion($packageName));
    }
}
