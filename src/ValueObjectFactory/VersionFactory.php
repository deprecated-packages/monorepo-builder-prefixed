<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperedfa898a454f\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperedfa898a454f\PharIo\Version\Version
    {
        return new \_PhpScoperedfa898a454f\PharIo\Version\Version($version);
    }
}
