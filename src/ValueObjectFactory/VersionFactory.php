<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper395d8a649392\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper395d8a649392\PharIo\Version\Version
    {
        return new \_PhpScoper395d8a649392\PharIo\Version\Version($version);
    }
}
