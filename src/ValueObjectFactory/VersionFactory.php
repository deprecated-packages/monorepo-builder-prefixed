<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper641780a4edd2\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper641780a4edd2\PharIo\Version\Version
    {
        return new \_PhpScoper641780a4edd2\PharIo\Version\Version($version);
    }
}
