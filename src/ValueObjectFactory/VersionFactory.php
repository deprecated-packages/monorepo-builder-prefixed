<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper47e141fb470a\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper47e141fb470a\PharIo\Version\Version
    {
        return new \_PhpScoper47e141fb470a\PharIo\Version\Version($version);
    }
}
