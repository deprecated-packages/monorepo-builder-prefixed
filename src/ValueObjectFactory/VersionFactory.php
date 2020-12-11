<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper8f797d20934a\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper8f797d20934a\PharIo\Version\Version
    {
        return new \_PhpScoper8f797d20934a\PharIo\Version\Version($version);
    }
}
