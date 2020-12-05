<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper44d485ef56a2\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper44d485ef56a2\PharIo\Version\Version
    {
        return new \_PhpScoper44d485ef56a2\PharIo\Version\Version($version);
    }
}
