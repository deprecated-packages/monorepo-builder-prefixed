<?php

namespace _PhpScoper717b2838a41b\Jean85;

use _PhpScoper717b2838a41b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper717b2838a41b\Jean85\Version
    {
        return new \_PhpScoper717b2838a41b\Jean85\Version($packageName, \_PhpScoper717b2838a41b\PackageVersions\Versions::getVersion($packageName));
    }
}
