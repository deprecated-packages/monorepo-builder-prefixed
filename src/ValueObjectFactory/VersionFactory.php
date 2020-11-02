<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper2e4403babf96\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper2e4403babf96\PharIo\Version\Version
    {
        return new \_PhpScoper2e4403babf96\PharIo\Version\Version($version);
    }
}
