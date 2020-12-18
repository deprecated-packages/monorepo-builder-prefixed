<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopera1d8e0344ecf\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopera1d8e0344ecf\PharIo\Version\Version
    {
        return new \_PhpScopera1d8e0344ecf\PharIo\Version\Version($version);
    }
}
