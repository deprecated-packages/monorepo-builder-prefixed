<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperb2257feafd7d\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperb2257feafd7d\PharIo\Version\Version
    {
        return new \_PhpScoperb2257feafd7d\PharIo\Version\Version($version);
    }
}
