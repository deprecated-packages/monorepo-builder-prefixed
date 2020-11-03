<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper4cbad741edc5\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper4cbad741edc5\PharIo\Version\Version
    {
        return new \_PhpScoper4cbad741edc5\PharIo\Version\Version($version);
    }
}
