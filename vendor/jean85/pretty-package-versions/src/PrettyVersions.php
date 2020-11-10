<?php

namespace _PhpScoper711ac919263f\Jean85;

use _PhpScoper711ac919263f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper711ac919263f\Jean85\Version
    {
        return new \_PhpScoper711ac919263f\Jean85\Version($packageName, \_PhpScoper711ac919263f\PackageVersions\Versions::getVersion($packageName));
    }
}
