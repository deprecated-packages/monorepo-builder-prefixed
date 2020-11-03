<?php

namespace _PhpScoperf968abd60cb0\Jean85;

use _PhpScoperf968abd60cb0\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperf968abd60cb0\Jean85\Version
    {
        return new \_PhpScoperf968abd60cb0\Jean85\Version($packageName, \_PhpScoperf968abd60cb0\PackageVersions\Versions::getVersion($packageName));
    }
}
