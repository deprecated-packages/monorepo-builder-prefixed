<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper600b802aef08\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper600b802aef08\PharIo\Version\Version
    {
        return new \_PhpScoper600b802aef08\PharIo\Version\Version($version);
    }
}
