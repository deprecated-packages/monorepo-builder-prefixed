<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperabca9a64438b\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperabca9a64438b\PharIo\Version\Version
    {
        return new \_PhpScoperabca9a64438b\PharIo\Version\Version($version);
    }
}
