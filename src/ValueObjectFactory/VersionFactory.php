<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper7cc068f3f5d1\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper7cc068f3f5d1\PharIo\Version\Version
    {
        return new \_PhpScoper7cc068f3f5d1\PharIo\Version\Version($version);
    }
}
