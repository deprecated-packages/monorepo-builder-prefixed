<?php

namespace _PhpScoperddf2171d3d2c\Jean85;

use _PhpScoperddf2171d3d2c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperddf2171d3d2c\Jean85\Version
    {
        return new \_PhpScoperddf2171d3d2c\Jean85\Version($packageName, \_PhpScoperddf2171d3d2c\PackageVersions\Versions::getVersion($packageName));
    }
}
