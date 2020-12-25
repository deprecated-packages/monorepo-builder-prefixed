<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper36281e29f54f\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper36281e29f54f\PharIo\Version\Version
    {
        return new \_PhpScoper36281e29f54f\PharIo\Version\Version($version);
    }
}
