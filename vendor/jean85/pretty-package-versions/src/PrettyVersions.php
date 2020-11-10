<?php

namespace _PhpScoper058a557299a1\Jean85;

use _PhpScoper058a557299a1\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper058a557299a1\Jean85\Version
    {
        return new \_PhpScoper058a557299a1\Jean85\Version($packageName, \_PhpScoper058a557299a1\PackageVersions\Versions::getVersion($packageName));
    }
}
