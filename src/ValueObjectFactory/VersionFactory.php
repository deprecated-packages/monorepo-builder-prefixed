<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper764e721c42e8\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper764e721c42e8\PharIo\Version\Version
    {
        return new \_PhpScoper764e721c42e8\PharIo\Version\Version($version);
    }
}
