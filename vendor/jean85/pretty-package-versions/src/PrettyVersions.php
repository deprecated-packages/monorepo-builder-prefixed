<?php

namespace _PhpScoper6f057cf7ca7c\Jean85;

use _PhpScoper6f057cf7ca7c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper6f057cf7ca7c\Jean85\Version
    {
        return new \_PhpScoper6f057cf7ca7c\Jean85\Version($packageName, \_PhpScoper6f057cf7ca7c\PackageVersions\Versions::getVersion($packageName));
    }
}
