<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper97d4f3c5628a\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper97d4f3c5628a\PharIo\Version\Version
    {
        return new \_PhpScoper97d4f3c5628a\PharIo\Version\Version($version);
    }
}
