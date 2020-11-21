<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperdbf49b510e11\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperdbf49b510e11\PharIo\Version\Version
    {
        return new \_PhpScoperdbf49b510e11\PharIo\Version\Version($version);
    }
}
