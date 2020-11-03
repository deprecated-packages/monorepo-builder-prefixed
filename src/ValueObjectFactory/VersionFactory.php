<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper30e4ccea42bd\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper30e4ccea42bd\PharIo\Version\Version
    {
        return new \_PhpScoper30e4ccea42bd\PharIo\Version\Version($version);
    }
}
