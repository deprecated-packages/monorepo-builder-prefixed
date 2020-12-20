<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper955845c5b45f\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper955845c5b45f\PharIo\Version\Version
    {
        return new \_PhpScoper955845c5b45f\PharIo\Version\Version($version);
    }
}
