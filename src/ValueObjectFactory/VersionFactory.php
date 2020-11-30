<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper6da0ff96db02\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper6da0ff96db02\PharIo\Version\Version
    {
        return new \_PhpScoper6da0ff96db02\PharIo\Version\Version($version);
    }
}
