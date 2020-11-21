<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperbc89827b806f\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperbc89827b806f\PharIo\Version\Version
    {
        return new \_PhpScoperbc89827b806f\PharIo\Version\Version($version);
    }
}
