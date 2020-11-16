<?php

namespace _PhpScoper29d04ea58d14\Jean85;

use _PhpScoper29d04ea58d14\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper29d04ea58d14\Jean85\Version
    {
        return new \_PhpScoper29d04ea58d14\Jean85\Version($packageName, \_PhpScoper29d04ea58d14\PackageVersions\Versions::getVersion($packageName));
    }
}
