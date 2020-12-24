<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper2f9b0ac741dd\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper2f9b0ac741dd\PharIo\Version\Version
    {
        return new \_PhpScoper2f9b0ac741dd\PharIo\Version\Version($version);
    }
}
