<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperdd624bbcb4e5\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperdd624bbcb4e5\PharIo\Version\Version
    {
        return new \_PhpScoperdd624bbcb4e5\PharIo\Version\Version($version);
    }
}
