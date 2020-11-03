<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperd6a443964d04\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperd6a443964d04\PharIo\Version\Version
    {
        return new \_PhpScoperd6a443964d04\PharIo\Version\Version($version);
    }
}
