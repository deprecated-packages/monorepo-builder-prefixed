<?php

declare (strict_types=1);
namespace Symplify\SetConfigResolver\Console;

use _PhpScoperbecbc4cd500f\Symfony\Component\Console\Input\InputInterface;
final class OptionValueResolver
{
    /**
     * @param string[] $optionNames
     */
    public function getOptionValue(\_PhpScoperbecbc4cd500f\Symfony\Component\Console\Input\InputInterface $input, array $optionNames) : ?string
    {
        foreach ($optionNames as $optionName) {
            if ($input->hasParameterOption($optionName, \true)) {
                return $input->getParameterOption($optionName, null, \true);
            }
        }
        return null;
    }
}
