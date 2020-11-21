<?php

namespace _PhpScoperb56893078f23\Jean85;

use _PhpScoperb56893078f23\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb56893078f23\Jean85\Version
    {
        return new \_PhpScoperb56893078f23\Jean85\Version($packageName, \_PhpScoperb56893078f23\PackageVersions\Versions::getVersion($packageName));
    }
}
