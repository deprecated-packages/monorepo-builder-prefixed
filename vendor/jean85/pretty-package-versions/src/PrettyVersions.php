<?php

namespace _PhpScopere57ee17947a3\Jean85;

use _PhpScopere57ee17947a3\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere57ee17947a3\Jean85\Version
    {
        return new \_PhpScopere57ee17947a3\Jean85\Version($packageName, \_PhpScopere57ee17947a3\PackageVersions\Versions::getVersion($packageName));
    }
}
