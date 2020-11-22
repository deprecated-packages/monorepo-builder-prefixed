<?php

namespace _PhpScoperb3d59f519671\Jean85;

use _PhpScoperb3d59f519671\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb3d59f519671\Jean85\Version
    {
        return new \_PhpScoperb3d59f519671\Jean85\Version($packageName, \_PhpScoperb3d59f519671\PackageVersions\Versions::getVersion($packageName));
    }
}
