<?php

namespace _PhpScopera3f2f7450f99\Jean85;

use _PhpScopera3f2f7450f99\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopera3f2f7450f99\Jean85\Version
    {
        return new \_PhpScopera3f2f7450f99\Jean85\Version($packageName, \_PhpScopera3f2f7450f99\PackageVersions\Versions::getVersion($packageName));
    }
}
