<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopereb9e28d9f307\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopereb9e28d9f307\PharIo\Version\Version
    {
        return new \_PhpScopereb9e28d9f307\PharIo\Version\Version($version);
    }
}
