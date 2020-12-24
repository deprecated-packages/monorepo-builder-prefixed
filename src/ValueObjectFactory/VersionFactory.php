<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper540e5a7ff813\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper540e5a7ff813\PharIo\Version\Version
    {
        return new \_PhpScoper540e5a7ff813\PharIo\Version\Version($version);
    }
}
