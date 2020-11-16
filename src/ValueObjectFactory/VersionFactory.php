<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper6f057cf7ca7c\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper6f057cf7ca7c\PharIo\Version\Version
    {
        return new \_PhpScoper6f057cf7ca7c\PharIo\Version\Version($version);
    }
}
