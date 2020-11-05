<?php

namespace _PhpScoperb445cd48032c\Jean85;

use _PhpScoperb445cd48032c\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperb445cd48032c\Jean85\Version
    {
        return new \_PhpScoperb445cd48032c\Jean85\Version($packageName, \_PhpScoperb445cd48032c\PackageVersions\Versions::getVersion($packageName));
    }
}
