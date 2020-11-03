<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper1600de59048a\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper1600de59048a\PharIo\Version\Version
    {
        return new \_PhpScoper1600de59048a\PharIo\Version\Version($version);
    }
}
