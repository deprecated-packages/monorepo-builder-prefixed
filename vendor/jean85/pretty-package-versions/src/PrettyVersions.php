<?php

namespace _PhpScoper62894f8143f4\Jean85;

use _PhpScoper62894f8143f4\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper62894f8143f4\Jean85\Version
    {
        return new \_PhpScoper62894f8143f4\Jean85\Version($packageName, \_PhpScoper62894f8143f4\PackageVersions\Versions::getVersion($packageName));
    }
}
