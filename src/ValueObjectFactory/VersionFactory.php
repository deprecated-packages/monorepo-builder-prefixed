<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper69b0f14b2eca\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper69b0f14b2eca\PharIo\Version\Version
    {
        return new \_PhpScoper69b0f14b2eca\PharIo\Version\Version($version);
    }
}
