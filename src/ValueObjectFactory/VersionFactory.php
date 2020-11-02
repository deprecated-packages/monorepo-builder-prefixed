<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperfff890f8359a\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperfff890f8359a\PharIo\Version\Version
    {
        return new \_PhpScoperfff890f8359a\PharIo\Version\Version($version);
    }
}
