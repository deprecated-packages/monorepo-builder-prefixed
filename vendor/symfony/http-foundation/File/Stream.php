<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc9dee8f3b3e7\Symfony\Component\HttpFoundation\File;

/**
 * A PHP stream of unknown size.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class Stream extends \_PhpScoperc9dee8f3b3e7\Symfony\Component\HttpFoundation\File\File
{
    /**
     * {@inheritdoc}
     */
    public function getSize()
    {
        return \false;
    }
}
