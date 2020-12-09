<?php

namespace _PhpScoperc86a79e2d6b2;

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use _PhpScoperc86a79e2d6b2\Symfony\Polyfill\Intl\Normalizer as p;
if (!\function_exists('normalizer_is_normalized')) {
    function normalizer_is_normalized($s, $form = \_PhpScoperc86a79e2d6b2\Symfony\Polyfill\Intl\Normalizer\Normalizer::NFC)
    {
        return \_PhpScoperc86a79e2d6b2\Symfony\Polyfill\Intl\Normalizer\Normalizer::isNormalized($s, $form);
    }
    function normalizer_normalize($s, $form = \_PhpScoperc86a79e2d6b2\Symfony\Polyfill\Intl\Normalizer\Normalizer::NFC)
    {
        return \_PhpScoperc86a79e2d6b2\Symfony\Polyfill\Intl\Normalizer\Normalizer::normalize($s, $form);
    }
}
