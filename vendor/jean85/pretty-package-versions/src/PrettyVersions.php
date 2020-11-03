<?php

namespace _PhpScoper4cbad741edc5\Jean85;

use _PhpScoper4cbad741edc5\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper4cbad741edc5\Jean85\Version
    {
        return new \_PhpScoper4cbad741edc5\Jean85\Version($packageName, \_PhpScoper4cbad741edc5\PackageVersions\Versions::getVersion($packageName));
    }
}
