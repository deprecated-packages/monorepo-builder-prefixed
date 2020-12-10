<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperd1c9c8ec01a8\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperd1c9c8ec01a8\PharIo\Version\Version
    {
        return new \_PhpScoperd1c9c8ec01a8\PharIo\Version\Version($version);
    }
}
