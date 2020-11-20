<?php

namespace _PhpScoperabca9a64438b\Jean85;

use _PhpScoperabca9a64438b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperabca9a64438b\Jean85\Version
    {
        return new \_PhpScoperabca9a64438b\Jean85\Version($packageName, \_PhpScoperabca9a64438b\PackageVersions\Versions::getVersion($packageName));
    }
}
