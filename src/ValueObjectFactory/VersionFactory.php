<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperc51531d67326\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperc51531d67326\PharIo\Version\Version
    {
        return new \_PhpScoperc51531d67326\PharIo\Version\Version($version);
    }
}
