<?php

namespace _PhpScoper931cda798d50\Jean85;

use _PhpScoper931cda798d50\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper931cda798d50\Jean85\Version
    {
        return new \_PhpScoper931cda798d50\Jean85\Version($packageName, \_PhpScoper931cda798d50\PackageVersions\Versions::getVersion($packageName));
    }
}
