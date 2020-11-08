<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperda849baa4a45\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperda849baa4a45\PharIo\Version\Version
    {
        return new \_PhpScoperda849baa4a45\PharIo\Version\Version($version);
    }
}
