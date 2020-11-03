<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperf701e46e48a5\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperf701e46e48a5\PharIo\Version\Version
    {
        return new \_PhpScoperf701e46e48a5\PharIo\Version\Version($version);
    }
}
