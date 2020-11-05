<?php

namespace _PhpScoperf78d2b40800e\Jean85;

use _PhpScoperf78d2b40800e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf78d2b40800e\Jean85\Version
    {
        return new \_PhpScoperf78d2b40800e\Jean85\Version($packageName, \_PhpScoperf78d2b40800e\PackageVersions\Versions::getVersion($packageName));
    }
}
