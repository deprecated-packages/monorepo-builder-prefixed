<?php

namespace _PhpScoperf1163522a13e;

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use _PhpScoperf1163522a13e\Symfony\Polyfill\Intl\Normalizer as p;
if (!\function_exists('normalizer_is_normalized')) {
    function normalizer_is_normalized($input, $form = \_PhpScoperf1163522a13e\Symfony\Polyfill\Intl\Normalizer\Normalizer::NFC)
    {
        return \_PhpScoperf1163522a13e\Symfony\Polyfill\Intl\Normalizer\Normalizer::isNormalized($input, $form);
    }
}
if (!\function_exists('normalizer_normalize')) {
    function normalizer_normalize($input, $form = \_PhpScoperf1163522a13e\Symfony\Polyfill\Intl\Normalizer\Normalizer::NFC)
    {
        return \_PhpScoperf1163522a13e\Symfony\Polyfill\Intl\Normalizer\Normalizer::normalize($input, $form);
    }
}
