<?php

namespace _PhpScoperf0b2c071f15d\Jean85;

use _PhpScoperf0b2c071f15d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf0b2c071f15d\Jean85\Version
    {
        return new \_PhpScoperf0b2c071f15d\Jean85\Version($packageName, \_PhpScoperf0b2c071f15d\PackageVersions\Versions::getVersion($packageName));
    }
}
