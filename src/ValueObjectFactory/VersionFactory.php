<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper184bc0c88d68\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper184bc0c88d68\PharIo\Version\Version
    {
        return new \_PhpScoper184bc0c88d68\PharIo\Version\Version($version);
    }
}
