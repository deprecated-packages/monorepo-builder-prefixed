<?php

namespace _PhpScoper437fa56c88e1\Jean85;

use _PhpScoper437fa56c88e1\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper437fa56c88e1\Jean85\Version
    {
        return new \_PhpScoper437fa56c88e1\Jean85\Version($packageName, \_PhpScoper437fa56c88e1\PackageVersions\Versions::getVersion($packageName));
    }
}
