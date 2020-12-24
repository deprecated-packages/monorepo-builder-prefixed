<?php

namespace _PhpScoper2f9b0ac741dd;

/**
 * Random_* Compatibility Library 
 * for using the new PHP 7 random_* API in PHP 5 projects
 * 
 * The MIT License (MIT)
 * 
 * Copyright (c) 2015 Paragon Initiative Enterprises
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */
if (!\function_exists('random_bytes') && \extension_loaded('com_dotnet')) {
    /**
     * Windows with PHP < 5.3.0 will not have the function
     * openssl_random_pseudo_bytes() available, so let's use
     * CAPICOM to work around this deficiency.
     * 
     * @param int $bytes
     * 
     * @throws Exception
     * 
     * @return string
     */
    function random_bytes($bytes)
    {
        if (!\is_int($bytes)) {
            throw new \TypeError('Length must be an integer');
        }
        if ($bytes < 1) {
            throw new \Error('Length must be greater than 0');
        }
        $buf = '';
        $util = new \COM('CAPICOM.Utilities.1');
        $execCount = 0;
        /**
         * Let's not let it loop forever. If we run N times and fail to
         * get N bytes of random data, then CAPICOM has failed us.
         */
        do {
            $buf .= \base64_decode($util->GetRandom($bytes, 0));
            if (\_PhpScoper2f9b0ac741dd\RandomCompat_strlen($buf) >= $bytes) {
                /**
                 * Return our random entropy buffer here:
                 */
                return \_PhpScoper2f9b0ac741dd\RandomCompat_substr($buf, 0, $bytes);
            }
            ++$execCount;
        } while ($execCount < $bytes);
        /**
         * If we reach here, PHP has failed us.
         */
        throw new \Exception('PHP failed to generate random data.');
    }
}
