<?php

namespace _PhpScopere6fd569fd43f\Jean85;

use _PhpScopere6fd569fd43f\PackageVersions\Versions;
class PrettyVersions
{
    const SHORT_COMMIT_LENGTH = 7;
    public static function getVersion(string $packageName) : \_PhpScopere6fd569fd43f\Jean85\Version
    {
        return new \_PhpScopere6fd569fd43f\Jean85\Version($packageName, \_PhpScopere6fd569fd43f\PackageVersions\Versions::getVersion($packageName));
    }
}
