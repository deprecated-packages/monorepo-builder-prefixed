<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperef4638f5d8b1\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperef4638f5d8b1\PharIo\Version\Version
    {
        return new \_PhpScoperef4638f5d8b1\PharIo\Version\Version($version);
    }
}
