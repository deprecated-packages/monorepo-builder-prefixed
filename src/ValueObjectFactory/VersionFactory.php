<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperc4f6ca029880\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperc4f6ca029880\PharIo\Version\Version
    {
        return new \_PhpScoperc4f6ca029880\PharIo\Version\Version($version);
    }
}
