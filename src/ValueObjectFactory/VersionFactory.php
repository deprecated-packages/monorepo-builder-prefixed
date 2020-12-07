<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper94f327c48d46\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper94f327c48d46\PharIo\Version\Version
    {
        return new \_PhpScoper94f327c48d46\PharIo\Version\Version($version);
    }
}
