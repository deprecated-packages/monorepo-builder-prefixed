<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperb1086ecf2bcb\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperb1086ecf2bcb\PharIo\Version\Version
    {
        return new \_PhpScoperb1086ecf2bcb\PharIo\Version\Version($version);
    }
}
