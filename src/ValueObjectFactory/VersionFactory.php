<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper77ed23b49cd3\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper77ed23b49cd3\PharIo\Version\Version
    {
        return new \_PhpScoper77ed23b49cd3\PharIo\Version\Version($version);
    }
}
