<?php

namespace _PhpScoperd3e9cfbe9d90\Jean85;

use _PhpScoperd3e9cfbe9d90\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScoperd3e9cfbe9d90\Jean85\Version
    {
        return new \_PhpScoperd3e9cfbe9d90\Jean85\Version($packageName, \_PhpScoperd3e9cfbe9d90\PackageVersions\Versions::getVersion($packageName));
    }
    public static function getRootPackageName() : string
    {
        return \_PhpScoperd3e9cfbe9d90\PackageVersions\Versions::ROOT_PACKAGE_NAME;
    }
    public static function getRootPackageVersion() : \_PhpScoperd3e9cfbe9d90\Jean85\Version
    {
        return self::getVersion(\_PhpScoperd3e9cfbe9d90\PackageVersions\Versions::ROOT_PACKAGE_NAME);
    }
}
