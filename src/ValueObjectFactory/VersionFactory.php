<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperafeb7177e88e\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperafeb7177e88e\PharIo\Version\Version
    {
        return new \_PhpScoperafeb7177e88e\PharIo\Version\Version($version);
    }
}
