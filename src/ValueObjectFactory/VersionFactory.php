<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper68e56c1b5bd9\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper68e56c1b5bd9\PharIo\Version\Version
    {
        return new \_PhpScoper68e56c1b5bd9\PharIo\Version\Version($version);
    }
}
