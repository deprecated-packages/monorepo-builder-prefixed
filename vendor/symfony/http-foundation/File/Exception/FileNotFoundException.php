<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\File\Exception;

/**
 * Thrown when a file was not found.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FileNotFoundException extends \_PhpScoperbe77f3b0e77d\Symfony\Component\HttpFoundation\File\Exception\FileException
{
    public function __construct(string $path)
    {
        parent::__construct(\sprintf('The file "%s" does not exist', $path));
    }
}
