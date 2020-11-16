<?php

namespace _PhpScoper1c1f12bbe5a7\Jean85;

use _PhpScoper1c1f12bbe5a7\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper1c1f12bbe5a7\Jean85\Version
    {
        return new \_PhpScoper1c1f12bbe5a7\Jean85\Version($packageName, \_PhpScoper1c1f12bbe5a7\PackageVersions\Versions::getVersion($packageName));
    }
}
