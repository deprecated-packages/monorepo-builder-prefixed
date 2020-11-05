<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoperb445cd48032c\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoperb445cd48032c\PharIo\Version\Version
    {
        return new \_PhpScoperb445cd48032c\PharIo\Version\Version($version);
    }
}
