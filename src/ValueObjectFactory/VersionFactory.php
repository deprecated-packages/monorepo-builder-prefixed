<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper9122d33f3e27\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper9122d33f3e27\PharIo\Version\Version
    {
        return new \_PhpScoper9122d33f3e27\PharIo\Version\Version($version);
    }
}
