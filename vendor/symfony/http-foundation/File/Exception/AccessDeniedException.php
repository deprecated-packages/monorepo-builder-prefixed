<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper7b254e6a7108\Symfony\Component\HttpFoundation\File\Exception;

/**
 * Thrown when the access on a file was denied.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class AccessDeniedException extends \_PhpScoper7b254e6a7108\Symfony\Component\HttpFoundation\File\Exception\FileException
{
    public function __construct(string $path)
    {
        parent::__construct(\sprintf('The file %s could not be accessed', $path));
    }
}
