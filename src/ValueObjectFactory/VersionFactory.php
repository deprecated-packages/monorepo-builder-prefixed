<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper7609e473a4cb\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper7609e473a4cb\PharIo\Version\Version
    {
        return new \_PhpScoper7609e473a4cb\PharIo\Version\Version($version);
    }
}
