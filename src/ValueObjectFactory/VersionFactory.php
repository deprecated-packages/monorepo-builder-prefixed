<?php

declare (strict_types=1);
namespace Symplify\MonorepoBuilder\ValueObjectFactory;

use _PhpScopere6fd569fd43f\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScopere6fd569fd43f\PharIo\Version\Version
    {
        return new \_PhpScopere6fd569fd43f\PharIo\Version\Version($version);
    }
}
