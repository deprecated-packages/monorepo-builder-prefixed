<?php

namespace _PhpScoperdfdcb3d4cca0\Jean85;

use _PhpScoperdfdcb3d4cca0\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperdfdcb3d4cca0\Jean85\Version
    {
        return new \_PhpScoperdfdcb3d4cca0\Jean85\Version($packageName, \_PhpScoperdfdcb3d4cca0\PackageVersions\Versions::getVersion($packageName));
    }
}
