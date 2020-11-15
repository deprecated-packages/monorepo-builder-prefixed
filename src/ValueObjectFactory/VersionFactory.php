<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper47ce95ac3375\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper47ce95ac3375\PharIo\Version\Version
    {
        return new \_PhpScoper47ce95ac3375\PharIo\Version\Version($version);
    }
}
