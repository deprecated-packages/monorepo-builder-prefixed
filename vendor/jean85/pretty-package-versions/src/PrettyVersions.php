<?php

namespace _PhpScoper6786b40fc02e\Jean85;

use _PhpScoper6786b40fc02e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper6786b40fc02e\Jean85\Version
    {
        return new \_PhpScoper6786b40fc02e\Jean85\Version($packageName, \_PhpScoper6786b40fc02e\PackageVersions\Versions::getVersion($packageName));
    }
}
