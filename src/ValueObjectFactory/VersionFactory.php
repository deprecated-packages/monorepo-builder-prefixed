<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperb0f70d760c3d\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperb0f70d760c3d\PharIo\Version\Version
    {
        return new \_PhpScoperb0f70d760c3d\PharIo\Version\Version($version);
    }
}
