<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperc9dee8f3b3e7\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperc9dee8f3b3e7\PharIo\Version\Version
    {
        return new \_PhpScoperc9dee8f3b3e7\PharIo\Version\Version($version);
    }
}
