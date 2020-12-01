<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper1c9ce01e7be6\Symfony\Component\Console\Descriptor;

use _PhpScoper1c9ce01e7be6\Symfony\Component\Console\Application;
use _PhpScoper1c9ce01e7be6\Symfony\Component\Console\Command\Command;
use _PhpScoper1c9ce01e7be6\Symfony\Component\Console\Exception\InvalidArgumentException;
use _PhpScoper1c9ce01e7be6\Symfony\Component\Console\Input\InputArgument;
use _PhpScoper1c9ce01e7be6\Symfony\Component\Console\Input\InputDefinition;
use _PhpScoper1c9ce01e7be6\Symfony\Component\Console\Input\InputOption;
use _PhpScoper1c9ce01e7be6\Symfony\Component\Console\Output\OutputInterface;
/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
abstract class Descriptor implements \_PhpScoper1c9ce01e7be6\Symfony\Component\Console\Descriptor\DescriptorInterface
{
    /**
     * @var OutputInterface
     */
    protected $output;
    /**
     * {@inheritdoc}
     */
    public function describe(\_PhpScoper1c9ce01e7be6\Symfony\Component\Console\Output\OutputInterface $output, $object, array $options = [])
    {
        $this->output = $output;
        switch (\true) {
            case $object instanceof \_PhpScoper1c9ce01e7be6\Symfony\Component\Console\Input\InputArgument:
                $this->describeInputArgument($object, $options);
                break;
            case $object instanceof \_PhpScoper1c9ce01e7be6\Symfony\Component\Console\Input\InputOption:
                $this->describeInputOption($object, $options);
                break;
            case $object instanceof \_PhpScoper1c9ce01e7be6\Symfony\Component\Console\Input\InputDefinition:
                $this->describeInputDefinition($object, $options);
                break;
            case $object instanceof \_PhpScoper1c9ce01e7be6\Symfony\Component\Console\Command\Command:
                $this->describeCommand($object, $options);
                break;
            case $object instanceof \_PhpScoper1c9ce01e7be6\Symfony\Component\Console\Application:
                $this->describeApplication($object, $options);
                break;
            default:
                throw new \_PhpScoper1c9ce01e7be6\Symfony\Component\Console\Exception\InvalidArgumentException(\sprintf('Object of type "%s" is not describable.', \get_class($object)));
        }
    }
    /**
     * Writes content to output.
     *
     * @param string $content
     * @param bool   $decorated
     */
    protected function write($content, $decorated = \false)
    {
        $this->output->write($content, \false, $decorated ? \_PhpScoper1c9ce01e7be6\Symfony\Component\Console\Output\OutputInterface::OUTPUT_NORMAL : \_PhpScoper1c9ce01e7be6\Symfony\Component\Console\Output\OutputInterface::OUTPUT_RAW);
    }
    /**
     * Describes an InputArgument instance.
     *
     * @return string|mixed
     */
    protected abstract function describeInputArgument(\_PhpScoper1c9ce01e7be6\Symfony\Component\Console\Input\InputArgument $argument, array $options = []);
    /**
     * Describes an InputOption instance.
     *
     * @return string|mixed
     */
    protected abstract function describeInputOption(\_PhpScoper1c9ce01e7be6\Symfony\Component\Console\Input\InputOption $option, array $options = []);
    /**
     * Describes an InputDefinition instance.
     *
     * @return string|mixed
     */
    protected abstract function describeInputDefinition(\_PhpScoper1c9ce01e7be6\Symfony\Component\Console\Input\InputDefinition $definition, array $options = []);
    /**
     * Describes a Command instance.
     *
     * @return string|mixed
     */
    protected abstract function describeCommand(\_PhpScoper1c9ce01e7be6\Symfony\Component\Console\Command\Command $command, array $options = []);
    /**
     * Describes an Application instance.
     *
     * @return string|mixed
     */
    protected abstract function describeApplication(\_PhpScoper1c9ce01e7be6\Symfony\Component\Console\Application $application, array $options = []);
}
