<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper3c696cbcc510\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper3c696cbcc510\PharIo\Version\Version
    {
        return new \_PhpScoper3c696cbcc510\PharIo\Version\Version($version);
    }
}
