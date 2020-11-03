<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperd4e30d8318e8\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperd4e30d8318e8\PharIo\Version\Version
    {
        return new \_PhpScoperd4e30d8318e8\PharIo\Version\Version($version);
    }
}
