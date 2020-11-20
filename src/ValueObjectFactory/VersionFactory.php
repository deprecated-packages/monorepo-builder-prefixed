<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopercdc90a6628b6\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopercdc90a6628b6\PharIo\Version\Version
    {
        return new \_PhpScopercdc90a6628b6\PharIo\Version\Version($version);
    }
}
