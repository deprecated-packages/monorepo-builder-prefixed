<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperb56893078f23\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperb56893078f23\PharIo\Version\Version
    {
        return new \_PhpScoperb56893078f23\PharIo\Version\Version($version);
    }
}
