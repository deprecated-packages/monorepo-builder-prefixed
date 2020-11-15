<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb25e75e9febe\Symfony\Component\Mime\Tests\DependencyInjection;

use _PhpScoperb25e75e9febe\PHPUnit\Framework\TestCase;
use _PhpScoperb25e75e9febe\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperb25e75e9febe\Symfony\Component\DependencyInjection\Definition;
use _PhpScoperb25e75e9febe\Symfony\Component\DependencyInjection\Reference;
use _PhpScoperb25e75e9febe\Symfony\Component\Mime\DependencyInjection\AddMimeTypeGuesserPass;
use _PhpScoperb25e75e9febe\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoperb25e75e9febe\Symfony\Component\Mime\MimeTypes;
class AddMimeTypeGuesserPassTest extends \_PhpScoperb25e75e9febe\PHPUnit\Framework\TestCase
{
    public function testTags()
    {
        $container = new \_PhpScoperb25e75e9febe\Symfony\Component\DependencyInjection\ContainerBuilder();
        $container->addCompilerPass(new \_PhpScoperb25e75e9febe\Symfony\Component\Mime\DependencyInjection\AddMimeTypeGuesserPass());
        $definition = new \_PhpScoperb25e75e9febe\Symfony\Component\DependencyInjection\Definition(\_PhpScoperb25e75e9febe\Symfony\Component\Mime\FileinfoMimeTypeGuesser::class);
        $definition->addArgument('/path/to/magic/file');
        $definition->addTag('mime.mime_type_guesser');
        $container->setDefinition('some_mime_type_guesser', $definition->setPublic(\true));
        $container->register('mime_types', \_PhpScoperb25e75e9febe\Symfony\Component\Mime\MimeTypes::class)->setPublic(\true);
        $container->compile();
        $router = $container->getDefinition('mime_types');
        $calls = $router->getMethodCalls();
        $this->assertCount(1, $calls);
        $this->assertEquals('registerGuesser', $calls[0][0]);
        $this->assertEquals(new \_PhpScoperb25e75e9febe\Symfony\Component\DependencyInjection\Reference('some_mime_type_guesser'), $calls[0][1][0]);
    }
}
