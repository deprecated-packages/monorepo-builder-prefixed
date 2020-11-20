<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper7ef219076398\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper7ef219076398\PharIo\Version\Version
    {
        return new \_PhpScoper7ef219076398\PharIo\Version\Version($version);
    }
}
