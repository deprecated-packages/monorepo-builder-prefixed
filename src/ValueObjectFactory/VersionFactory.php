<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper8889bf9b056f\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper8889bf9b056f\PharIo\Version\Version
    {
        return new \_PhpScoper8889bf9b056f\PharIo\Version\Version($version);
    }
}
