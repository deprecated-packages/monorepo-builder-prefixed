<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd1c9c8ec01a8\Symfony\Component\Console\Helper;

use _PhpScoperd1c9c8ec01a8\Symfony\Component\Console\Input\InputAwareInterface;
use _PhpScoperd1c9c8ec01a8\Symfony\Component\Console\Input\InputInterface;
/**
 * An implementation of InputAwareInterface for Helpers.
 *
 * @author Wouter J <waldio.webdesign@gmail.com>
 */
abstract class InputAwareHelper extends \_PhpScoperd1c9c8ec01a8\Symfony\Component\Console\Helper\Helper implements \_PhpScoperd1c9c8ec01a8\Symfony\Component\Console\Input\InputAwareInterface
{
    protected $input;
    /**
     * {@inheritdoc}
     */
    public function setInput(\_PhpScoperd1c9c8ec01a8\Symfony\Component\Console\Input\InputInterface $input)
    {
        $this->input = $input;
    }
}
