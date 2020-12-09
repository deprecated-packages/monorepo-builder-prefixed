<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperb15c77d6bb3b\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperb15c77d6bb3b\PharIo\Version\Version
    {
        return new \_PhpScoperb15c77d6bb3b\PharIo\Version\Version($version);
    }
}
