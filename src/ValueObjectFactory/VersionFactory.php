<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperc84013ed9ae7\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperc84013ed9ae7\PharIo\Version\Version
    {
        return new \_PhpScoperc84013ed9ae7\PharIo\Version\Version($version);
    }
}
