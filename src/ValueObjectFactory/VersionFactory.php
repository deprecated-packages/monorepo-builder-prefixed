<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper7d1be3c5de07\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper7d1be3c5de07\PharIo\Version\Version
    {
        return new \_PhpScoper7d1be3c5de07\PharIo\Version\Version($version);
    }
}
