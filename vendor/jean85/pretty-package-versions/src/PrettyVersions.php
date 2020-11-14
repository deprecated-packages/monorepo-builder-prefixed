<?php

namespace _PhpScoperc35444adb584\Jean85;

use _PhpScoperc35444adb584\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperc35444adb584\Jean85\Version
    {
        return new \_PhpScoperc35444adb584\Jean85\Version($packageName, \_PhpScoperc35444adb584\PackageVersions\Versions::getVersion($packageName));
    }
}
