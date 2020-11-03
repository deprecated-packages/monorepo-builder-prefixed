<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopere73d4c0b7ec8\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopere73d4c0b7ec8\PharIo\Version\Version
    {
        return new \_PhpScopere73d4c0b7ec8\PharIo\Version\Version($version);
    }
}
