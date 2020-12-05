<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperbd03d493ccc6\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperbd03d493ccc6\PharIo\Version\Version
    {
        return new \_PhpScoperbd03d493ccc6\PharIo\Version\Version($version);
    }
}
