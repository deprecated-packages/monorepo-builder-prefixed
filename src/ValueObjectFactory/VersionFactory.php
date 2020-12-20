<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper0217ecc5969a\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper0217ecc5969a\PharIo\Version\Version
    {
        return new \_PhpScoper0217ecc5969a\PharIo\Version\Version($version);
    }
}
