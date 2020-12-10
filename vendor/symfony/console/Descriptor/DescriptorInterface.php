<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper84d68f9a1b63\Symfony\Component\Console\Descriptor;

use _PhpScoper84d68f9a1b63\Symfony\Component\Console\Output\OutputInterface;
/**
 * Descriptor interface.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
interface DescriptorInterface
{
    /**
     * Describes an object if supported.
     *
     * @param object $object
     */
    public function describe(\_PhpScoper84d68f9a1b63\Symfony\Component\Console\Output\OutputInterface $output, $object, array $options = []);
}
