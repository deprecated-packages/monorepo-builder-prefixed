<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper1ceaf4cbd5cb\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper1ceaf4cbd5cb\PharIo\Version\Version
    {
        return new \_PhpScoper1ceaf4cbd5cb\PharIo\Version\Version($version);
    }
}
