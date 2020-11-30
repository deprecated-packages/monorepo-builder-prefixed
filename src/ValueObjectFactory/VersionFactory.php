<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper0ad68a106f23\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper0ad68a106f23\PharIo\Version\Version
    {
        return new \_PhpScoper0ad68a106f23\PharIo\Version\Version($version);
    }
}
