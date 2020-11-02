<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperb1c8d8e78946\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperb1c8d8e78946\PharIo\Version\Version
    {
        return new \_PhpScoperb1c8d8e78946\PharIo\Version\Version($version);
    }
}
