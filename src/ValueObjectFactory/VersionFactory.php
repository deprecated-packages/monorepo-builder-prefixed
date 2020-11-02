<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper690f6ea278e4\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper690f6ea278e4\PharIo\Version\Version
    {
        return new \_PhpScoper690f6ea278e4\PharIo\Version\Version($version);
    }
}
