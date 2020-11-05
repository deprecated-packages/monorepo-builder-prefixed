<?php

namespace _PhpScoper8aa7c2bece07\Jean85;

use _PhpScoper8aa7c2bece07\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper8aa7c2bece07\Jean85\Version
    {
        return new \_PhpScoper8aa7c2bece07\Jean85\Version($packageName, \_PhpScoper8aa7c2bece07\PackageVersions\Versions::getVersion($packageName));
    }
}
