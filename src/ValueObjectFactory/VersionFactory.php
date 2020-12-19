<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperac0a9a33ae94\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperac0a9a33ae94\PharIo\Version\Version
    {
        return new \_PhpScoperac0a9a33ae94\PharIo\Version\Version($version);
    }
}
