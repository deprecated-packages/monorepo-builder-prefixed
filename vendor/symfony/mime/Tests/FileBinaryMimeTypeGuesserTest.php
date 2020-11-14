<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere6fd569fd43f\Symfony\Component\Mime\Tests;

use _PhpScopere6fd569fd43f\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScopere6fd569fd43f\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScopere6fd569fd43f\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScopere6fd569fd43f\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScopere6fd569fd43f\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
