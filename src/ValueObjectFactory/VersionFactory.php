<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper138e2990dbdb\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper138e2990dbdb\PharIo\Version\Version
    {
        return new \_PhpScoper138e2990dbdb\PharIo\Version\Version($version);
    }
}
