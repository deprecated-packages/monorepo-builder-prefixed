<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperb2b5f37d9a43\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperb2b5f37d9a43\PharIo\Version\Version
    {
        return new \_PhpScoperb2b5f37d9a43\PharIo\Version\Version($version);
    }
}
