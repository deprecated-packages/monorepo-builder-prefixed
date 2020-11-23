<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopere2a14c1f9852\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopere2a14c1f9852\PharIo\Version\Version
    {
        return new \_PhpScopere2a14c1f9852\PharIo\Version\Version($version);
    }
}
