<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperab93339c6bca\Symfony\Component\Mime\Tests\DependencyInjection;

use _PhpScoperab93339c6bca\PHPUnit\Framework\TestCase;
use _PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Definition;
use _PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Reference;
use _PhpScoperab93339c6bca\Symfony\Component\Mime\DependencyInjection\AddMimeTypeGuesserPass;
use _PhpScoperab93339c6bca\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoperab93339c6bca\Symfony\Component\Mime\MimeTypes;
class AddMimeTypeGuesserPassTest extends \_PhpScoperab93339c6bca\PHPUnit\Framework\TestCase
{
    public function testTags()
    {
        $container = new \_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\ContainerBuilder();
        $container->addCompilerPass(new \_PhpScoperab93339c6bca\Symfony\Component\Mime\DependencyInjection\AddMimeTypeGuesserPass());
        $definition = new \_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Definition(\_PhpScoperab93339c6bca\Symfony\Component\Mime\FileinfoMimeTypeGuesser::class);
        $definition->addArgument('/path/to/magic/file');
        $definition->addTag('mime.mime_type_guesser');
        $container->setDefinition('some_mime_type_guesser', $definition->setPublic(\true));
        $container->register('mime_types', \_PhpScoperab93339c6bca\Symfony\Component\Mime\MimeTypes::class)->setPublic(\true);
        $container->compile();
        $router = $container->getDefinition('mime_types');
        $calls = $router->getMethodCalls();
        $this->assertCount(1, $calls);
        $this->assertEquals('registerGuesser', $calls[0][0]);
        $this->assertEquals(new \_PhpScoperab93339c6bca\Symfony\Component\DependencyInjection\Reference('some_mime_type_guesser'), $calls[0][1][0]);
    }
}
