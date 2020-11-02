<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperf0acd9a8c4f5\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperf0acd9a8c4f5\PharIo\Version\Version
    {
        return new \_PhpScoperf0acd9a8c4f5\PharIo\Version\Version($version);
    }
}
