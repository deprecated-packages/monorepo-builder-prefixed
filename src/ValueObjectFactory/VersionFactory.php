<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopere32570efa19a\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopere32570efa19a\PharIo\Version\Version
    {
        return new \_PhpScopere32570efa19a\PharIo\Version\Version($version);
    }
}
