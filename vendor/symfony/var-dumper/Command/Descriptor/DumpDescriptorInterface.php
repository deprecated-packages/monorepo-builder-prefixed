<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperddf2171d3d2c\Symfony\Component\VarDumper\Command\Descriptor;

use _PhpScoperddf2171d3d2c\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoperddf2171d3d2c\Symfony\Component\VarDumper\Cloner\Data;
/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
interface DumpDescriptorInterface
{
    public function describe(\_PhpScoperddf2171d3d2c\Symfony\Component\Console\Output\OutputInterface $output, \_PhpScoperddf2171d3d2c\Symfony\Component\VarDumper\Cloner\Data $data, array $context, int $clientId) : void;
}
