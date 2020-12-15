<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopere1b4619561f2\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopere1b4619561f2\PharIo\Version\Version
    {
        return new \_PhpScopere1b4619561f2\PharIo\Version\Version($version);
    }
}
