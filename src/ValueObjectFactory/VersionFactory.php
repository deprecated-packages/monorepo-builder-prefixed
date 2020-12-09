<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopera85504f0ea7b\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopera85504f0ea7b\PharIo\Version\Version
    {
        return new \_PhpScopera85504f0ea7b\PharIo\Version\Version($version);
    }
}
