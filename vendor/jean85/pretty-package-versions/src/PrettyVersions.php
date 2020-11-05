<?php

namespace _PhpScoperc0b8351d879b\Jean85;

use _PhpScoperc0b8351d879b\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc0b8351d879b\Jean85\Version
    {
        return new \_PhpScoperc0b8351d879b\Jean85\Version($packageName, \_PhpScoperc0b8351d879b\PackageVersions\Versions::getVersion($packageName));
    }
}
