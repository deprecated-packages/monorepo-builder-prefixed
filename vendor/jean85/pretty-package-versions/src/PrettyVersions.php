<?php

namespace _PhpScoper4ef7335528ad\Jean85;

use _PhpScoper4ef7335528ad\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper4ef7335528ad\Jean85\Version
    {
        return new \_PhpScoper4ef7335528ad\Jean85\Version($packageName, \_PhpScoper4ef7335528ad\PackageVersions\Versions::getVersion($packageName));
    }
}
