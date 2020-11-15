<?php

namespace _PhpScoper777981beaf84\Jean85;

use _PhpScoper777981beaf84\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoper777981beaf84\Jean85\Version
    {
        return new \_PhpScoper777981beaf84\Jean85\Version($packageName, \_PhpScoper777981beaf84\PackageVersions\Versions::getVersion($packageName));
    }
}
