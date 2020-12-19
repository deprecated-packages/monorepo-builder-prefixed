<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper2f1e52375c65\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper2f1e52375c65\PharIo\Version\Version
    {
        return new \_PhpScoper2f1e52375c65\PharIo\Version\Version($version);
    }
}
