<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopera89333f3e9e2\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopera89333f3e9e2\PharIo\Version\Version
    {
        return new \_PhpScopera89333f3e9e2\PharIo\Version\Version($version);
    }
}
