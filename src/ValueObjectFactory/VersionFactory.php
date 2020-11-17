<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopere8131a326633\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopere8131a326633\PharIo\Version\Version
    {
        return new \_PhpScopere8131a326633\PharIo\Version\Version($version);
    }
}
