<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper8293d234e7ed\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper8293d234e7ed\PharIo\Version\Version
    {
        return new \_PhpScoper8293d234e7ed\PharIo\Version\Version($version);
    }
}
