<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper131024327b3f\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper131024327b3f\PharIo\Version\Version
    {
        return new \_PhpScoper131024327b3f\PharIo\Version\Version($version);
    }
}
