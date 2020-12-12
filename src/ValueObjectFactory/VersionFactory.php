<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper0677321b414b\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper0677321b414b\PharIo\Version\Version
    {
        return new \_PhpScoper0677321b414b\PharIo\Version\Version($version);
    }
}
