<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperfd1a6a0ee9af\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperfd1a6a0ee9af\PharIo\Version\Version
    {
        return new \_PhpScoperfd1a6a0ee9af\PharIo\Version\Version($version);
    }
}
