<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper5665d3e54f4c\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper5665d3e54f4c\PharIo\Version\Version
    {
        return new \_PhpScoper5665d3e54f4c\PharIo\Version\Version($version);
    }
}
