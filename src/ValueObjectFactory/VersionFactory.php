<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper54d694ea578e\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper54d694ea578e\PharIo\Version\Version
    {
        return new \_PhpScoper54d694ea578e\PharIo\Version\Version($version);
    }
}
