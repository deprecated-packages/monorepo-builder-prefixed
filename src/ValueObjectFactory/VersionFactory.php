<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopercde9d0a21b8c\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopercde9d0a21b8c\PharIo\Version\Version
    {
        return new \_PhpScopercde9d0a21b8c\PharIo\Version\Version($version);
    }
}
