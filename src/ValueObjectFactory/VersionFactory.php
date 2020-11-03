<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopera763b4be90d0\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopera763b4be90d0\PharIo\Version\Version
    {
        return new \_PhpScopera763b4be90d0\PharIo\Version\Version($version);
    }
}
