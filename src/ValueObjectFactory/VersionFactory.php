<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper55b61aca61e8\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper55b61aca61e8\PharIo\Version\Version
    {
        return new \_PhpScoper55b61aca61e8\PharIo\Version\Version($version);
    }
}
