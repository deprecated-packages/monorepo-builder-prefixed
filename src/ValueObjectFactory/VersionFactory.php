<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper4c089bfbbc1b\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper4c089bfbbc1b\PharIo\Version\Version
    {
        return new \_PhpScoper4c089bfbbc1b\PharIo\Version\Version($version);
    }
}
