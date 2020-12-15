<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperc0c27da9e1f7\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperc0c27da9e1f7\PharIo\Version\Version
    {
        return new \_PhpScoperc0c27da9e1f7\PharIo\Version\Version($version);
    }
}
