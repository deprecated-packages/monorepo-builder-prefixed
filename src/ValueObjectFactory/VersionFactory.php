<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopere0f28e6b9bde\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopere0f28e6b9bde\PharIo\Version\Version
    {
        return new \_PhpScopere0f28e6b9bde\PharIo\Version\Version($version);
    }
}
