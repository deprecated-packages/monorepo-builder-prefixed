<?php

namespace _PhpScoperce084f4275dd\Jean85;

use _PhpScoperce084f4275dd\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperce084f4275dd\Jean85\Version
    {
        return new \_PhpScoperce084f4275dd\Jean85\Version($packageName, \_PhpScoperce084f4275dd\PackageVersions\Versions::getVersion($packageName));
    }
}
