<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper4f477dcd4249\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper4f477dcd4249\PharIo\Version\Version
    {
        return new \_PhpScoper4f477dcd4249\PharIo\Version\Version($version);
    }
}
