<?php

namespace _PhpScoperb0f70d760c3d\Jean85;

use _PhpScoperb0f70d760c3d\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb0f70d760c3d\Jean85\Version
    {
        return new \_PhpScoperb0f70d760c3d\Jean85\Version($packageName, \_PhpScoperb0f70d760c3d\PackageVersions\Versions::getVersion($packageName));
    }
}
