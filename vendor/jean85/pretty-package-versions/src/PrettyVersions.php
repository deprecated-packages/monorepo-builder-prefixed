<?php

namespace _PhpScoperbc89827b806f\Jean85;

use _PhpScoperbc89827b806f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperbc89827b806f\Jean85\Version
    {
        return new \_PhpScoperbc89827b806f\Jean85\Version($packageName, \_PhpScoperbc89827b806f\PackageVersions\Versions::getVersion($packageName));
    }
}
