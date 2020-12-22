<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper621af75be782\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper621af75be782\PharIo\Version\Version
    {
        return new \_PhpScoper621af75be782\PharIo\Version\Version($version);
    }
}
