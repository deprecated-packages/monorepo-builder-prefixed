<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperc9dc9dec1b4a\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperc9dc9dec1b4a\PharIo\Version\Version
    {
        return new \_PhpScoperc9dc9dec1b4a\PharIo\Version\Version($version);
    }
}
