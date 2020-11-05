<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper717b2838a41b\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper717b2838a41b\PharIo\Version\Version
    {
        return new \_PhpScoper717b2838a41b\PharIo\Version\Version($version);
    }
}
