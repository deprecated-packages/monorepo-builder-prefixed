<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperb3d59f519671\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperb3d59f519671\PharIo\Version\Version
    {
        return new \_PhpScoperb3d59f519671\PharIo\Version\Version($version);
    }
}
