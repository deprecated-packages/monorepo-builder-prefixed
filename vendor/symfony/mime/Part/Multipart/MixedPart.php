<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere97aad8070b4\Symfony\Component\Mime\Part\Multipart;

use _PhpScopere97aad8070b4\Symfony\Component\Mime\Part\AbstractMultipartPart;
/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class MixedPart extends \_PhpScopere97aad8070b4\Symfony\Component\Mime\Part\AbstractMultipartPart
{
    public function getMediaSubtype() : string
    {
        return 'mixed';
    }
}
