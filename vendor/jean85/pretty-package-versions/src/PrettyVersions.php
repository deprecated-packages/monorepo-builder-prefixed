<?php

namespace _PhpScoper5efd9ec7ae1e\Jean85;

use _PhpScoper5efd9ec7ae1e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper5efd9ec7ae1e\Jean85\Version
    {
        return new \_PhpScoper5efd9ec7ae1e\Jean85\Version($packageName, \_PhpScoper5efd9ec7ae1e\PackageVersions\Versions::getVersion($packageName));
    }
}
