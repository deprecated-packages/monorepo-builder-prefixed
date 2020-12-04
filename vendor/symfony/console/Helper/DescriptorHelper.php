<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper23507306fdfc\Symfony\Component\Console\Helper;

use _PhpScoper23507306fdfc\Symfony\Component\Console\Descriptor\DescriptorInterface;
use _PhpScoper23507306fdfc\Symfony\Component\Console\Descriptor\JsonDescriptor;
use _PhpScoper23507306fdfc\Symfony\Component\Console\Descriptor\MarkdownDescriptor;
use _PhpScoper23507306fdfc\Symfony\Component\Console\Descriptor\TextDescriptor;
use _PhpScoper23507306fdfc\Symfony\Component\Console\Descriptor\XmlDescriptor;
use _PhpScoper23507306fdfc\Symfony\Component\Console\Exception\InvalidArgumentException;
use _PhpScoper23507306fdfc\Symfony\Component\Console\Output\OutputInterface;
/**
 * This class adds helper method to describe objects in various formats.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class DescriptorHelper extends \_PhpScoper23507306fdfc\Symfony\Component\Console\Helper\Helper
{
    /**
     * @var DescriptorInterface[]
     */
    private $descriptors = [];
    public function __construct()
    {
        $this->register('txt', new \_PhpScoper23507306fdfc\Symfony\Component\Console\Descriptor\TextDescriptor())->register('xml', new \_PhpScoper23507306fdfc\Symfony\Component\Console\Descriptor\XmlDescriptor())->register('json', new \_PhpScoper23507306fdfc\Symfony\Component\Console\Descriptor\JsonDescriptor())->register('md', new \_PhpScoper23507306fdfc\Symfony\Component\Console\Descriptor\MarkdownDescriptor());
    }
    /**
     * Describes an object if supported.
     *
     * Available options are:
     * * format: string, the output format name
     * * raw_text: boolean, sets output type as raw
     *
     * @param object $object
     *
     * @throws InvalidArgumentException when the given format is not supported
     */
    public function describe(\_PhpScoper23507306fdfc\Symfony\Component\Console\Output\OutputInterface $output, $object, array $options = [])
    {
        $options = \array_merge(['raw_text' => \false, 'format' => 'txt'], $options);
        if (!isset($this->descriptors[$options['format']])) {
            throw new \_PhpScoper23507306fdfc\Symfony\Component\Console\Exception\InvalidArgumentException(\sprintf('Unsupported format "%s".', $options['format']));
        }
        $descriptor = $this->descriptors[$options['format']];
        $descriptor->describe($output, $object, $options);
    }
    /**
     * Registers a descriptor.
     *
     * @param string $format
     *
     * @return $this
     */
    public function register($format, \_PhpScoper23507306fdfc\Symfony\Component\Console\Descriptor\DescriptorInterface $descriptor)
    {
        $this->descriptors[$format] = $descriptor;
        return $this;
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'descriptor';
    }
}
