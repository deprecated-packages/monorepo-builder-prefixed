<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperb25e75e9febe\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperb25e75e9febe\PharIo\Version\Version
    {
        return new \_PhpScoperb25e75e9febe\PharIo\Version\Version($version);
    }
}
