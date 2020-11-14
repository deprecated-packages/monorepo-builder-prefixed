<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopera00544d51e07\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopera00544d51e07\PharIo\Version\Version
    {
        return new \_PhpScopera00544d51e07\PharIo\Version\Version($version);
    }
}
