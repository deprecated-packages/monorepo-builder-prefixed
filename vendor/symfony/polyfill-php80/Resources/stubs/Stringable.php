<?php

namespace _PhpScoperf8eaec7affbd;

if (\PHP_VERSION_ID < 80000) {
    interface Stringable
    {
        /**
         * @return string
         */
        public function __toString();
    }
}
