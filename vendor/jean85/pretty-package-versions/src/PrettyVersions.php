<?php

namespace _PhpScoper650fbdd90fa0\Jean85;

use _PhpScoper650fbdd90fa0\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper650fbdd90fa0\Jean85\Version
    {
        return new \_PhpScoper650fbdd90fa0\Jean85\Version($packageName, \_PhpScoper650fbdd90fa0\PackageVersions\Versions::getVersion($packageName));
    }
}
