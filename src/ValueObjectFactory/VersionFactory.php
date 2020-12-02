<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopercd844fca8af3\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopercd844fca8af3\PharIo\Version\Version
    {
        return new \_PhpScopercd844fca8af3\PharIo\Version\Version($version);
    }
}
