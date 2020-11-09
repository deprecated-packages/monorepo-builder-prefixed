<?php

namespace _PhpScoper8a4bdaafa6ec\Jean85;

use _PhpScoper8a4bdaafa6ec\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper8a4bdaafa6ec\Jean85\Version
    {
        return new \_PhpScoper8a4bdaafa6ec\Jean85\Version($packageName, \_PhpScoper8a4bdaafa6ec\PackageVersions\Versions::getVersion($packageName));
    }
}
