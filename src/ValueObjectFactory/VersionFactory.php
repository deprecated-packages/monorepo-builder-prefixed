<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper450cfab1c22b\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper450cfab1c22b\PharIo\Version\Version
    {
        return new \_PhpScoper450cfab1c22b\PharIo\Version\Version($version);
    }
}
