<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper7606a7c2799b\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper7606a7c2799b\PharIo\Version\Version
    {
        return new \_PhpScoper7606a7c2799b\PharIo\Version\Version($version);
    }
}
