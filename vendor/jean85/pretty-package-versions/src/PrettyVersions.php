<?php

namespace _PhpScoper0fa0b2363a34\Jean85;

use _PhpScoper0fa0b2363a34\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper0fa0b2363a34\Jean85\Version
    {
        return new \_PhpScoper0fa0b2363a34\Jean85\Version($packageName, \_PhpScoper0fa0b2363a34\PackageVersions\Versions::getVersion($packageName));
    }
}
