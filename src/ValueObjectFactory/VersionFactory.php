<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScoper1ca65afc92f7\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper1ca65afc92f7\PharIo\Version\Version
    {
        return new \_PhpScoper1ca65afc92f7\PharIo\Version\Version($version);
    }
}
