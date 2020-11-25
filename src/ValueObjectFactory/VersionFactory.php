<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopera5e5d165d78c\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopera5e5d165d78c\PharIo\Version\Version
    {
        return new \_PhpScopera5e5d165d78c\PharIo\Version\Version($version);
    }
}
