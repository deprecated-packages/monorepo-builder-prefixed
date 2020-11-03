<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper3e1a86bff77f\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper3e1a86bff77f\PharIo\Version\Version
    {
        return new \_PhpScoper3e1a86bff77f\PharIo\Version\Version($version);
    }
}
