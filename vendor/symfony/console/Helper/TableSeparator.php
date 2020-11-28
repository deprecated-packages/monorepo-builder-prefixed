<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper31c74f11c4b8\Symfony\Component\Console\Helper;

/**
 * Marks a row as being a separator.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TableSeparator extends \_PhpScoper31c74f11c4b8\Symfony\Component\Console\Helper\TableCell
{
    public function __construct(array $options = [])
    {
        parent::__construct('', $options);
    }
}
