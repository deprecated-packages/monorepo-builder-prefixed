<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper7d795aa8de8d\Symfony\Component\HttpFoundation\File\Exception;

/**
 * Thrown when a file was not found.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FileNotFoundException extends \_PhpScoper7d795aa8de8d\Symfony\Component\HttpFoundation\File\Exception\FileException
{
    public function __construct(string $path)
    {
        parent::__construct(\sprintf('The file "%s" does not exist', $path));
    }
}
