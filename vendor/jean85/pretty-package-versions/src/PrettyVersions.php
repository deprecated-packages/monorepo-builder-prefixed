<?php

namespace _PhpScoperb2110b0b3130\Jean85;

use _PhpScoperb2110b0b3130\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb2110b0b3130\Jean85\Version
    {
        return new \_PhpScoperb2110b0b3130\Jean85\Version($packageName, \_PhpScoperb2110b0b3130\PackageVersions\Versions::getVersion($packageName));
    }
}
