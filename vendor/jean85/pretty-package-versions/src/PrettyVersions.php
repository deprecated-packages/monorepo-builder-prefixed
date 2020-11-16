<?php

namespace _PhpScoper244a857c31f6\Jean85;

use _PhpScoper244a857c31f6\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper244a857c31f6\Jean85\Version
    {
        return new \_PhpScoper244a857c31f6\Jean85\Version($packageName, \_PhpScoper244a857c31f6\PackageVersions\Versions::getVersion($packageName));
    }
}
