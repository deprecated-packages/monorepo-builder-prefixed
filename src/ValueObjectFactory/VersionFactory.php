<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopereb7fcd8f999a\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopereb7fcd8f999a\PharIo\Version\Version
    {
        return new \_PhpScopereb7fcd8f999a\PharIo\Version\Version($version);
    }
}
