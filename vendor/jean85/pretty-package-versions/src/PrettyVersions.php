<?php

namespace _PhpScoper31b05558ad5c\Jean85;

use _PhpScoper31b05558ad5c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper31b05558ad5c\Jean85\Version
    {
        return new \_PhpScoper31b05558ad5c\Jean85\Version($packageName, \_PhpScoper31b05558ad5c\PackageVersions\Versions::getVersion($packageName));
    }
}
