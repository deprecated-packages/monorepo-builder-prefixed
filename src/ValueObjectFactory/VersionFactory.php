<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopere97aad8070b4\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopere97aad8070b4\PharIo\Version\Version
    {
        return new \_PhpScopere97aad8070b4\PharIo\Version\Version($version);
    }
}
