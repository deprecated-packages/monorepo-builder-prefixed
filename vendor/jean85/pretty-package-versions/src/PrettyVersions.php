<?php

namespace _PhpScoper5861d582764b\Jean85;

use _PhpScoper5861d582764b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper5861d582764b\Jean85\Version
    {
        return new \_PhpScoper5861d582764b\Jean85\Version($packageName, \_PhpScoper5861d582764b\PackageVersions\Versions::getVersion($packageName));
    }
}
