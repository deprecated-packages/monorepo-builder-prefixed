<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper84d68f9a1b63\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper84d68f9a1b63\PharIo\Version\Version
    {
        return new \_PhpScoper84d68f9a1b63\PharIo\Version\Version($version);
    }
}
