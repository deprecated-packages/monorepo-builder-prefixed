<?php

namespace _PhpScoper416e75c46c6e\Jean85;

use _PhpScoper416e75c46c6e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper416e75c46c6e\Jean85\Version
    {
        return new \_PhpScoper416e75c46c6e\Jean85\Version($packageName, \_PhpScoper416e75c46c6e\PackageVersions\Versions::getVersion($packageName));
    }
}
