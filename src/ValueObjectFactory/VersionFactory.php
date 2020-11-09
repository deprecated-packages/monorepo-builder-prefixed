<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopere9939b84e968\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopere9939b84e968\PharIo\Version\Version
    {
        return new \_PhpScopere9939b84e968\PharIo\Version\Version($version);
    }
}
