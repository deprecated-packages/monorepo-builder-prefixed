<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperb3e4472dbe9b\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperb3e4472dbe9b\PharIo\Version\Version
    {
        return new \_PhpScoperb3e4472dbe9b\PharIo\Version\Version($version);
    }
}
