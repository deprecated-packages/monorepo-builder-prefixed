<?php

namespace _PhpScoperafeb7177e88e\Jean85;

use _PhpScoperafeb7177e88e\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperafeb7177e88e\Jean85\Version
    {
        return new \_PhpScoperafeb7177e88e\Jean85\Version($packageName, \_PhpScoperafeb7177e88e\PackageVersions\Versions::getVersion($packageName));
    }
}
