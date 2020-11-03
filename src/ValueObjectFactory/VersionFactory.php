<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper0f10ad97259b\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper0f10ad97259b\PharIo\Version\Version
    {
        return new \_PhpScoper0f10ad97259b\PharIo\Version\Version($version);
    }
}
