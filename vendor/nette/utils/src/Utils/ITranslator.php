<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper2f1e52375c65\Nette\Localization;

/**
 * Translator adapter.
 */
interface ITranslator
{
    /**
     * Translates the given string.
     */
    function translate($message, ...$parameters) : string;
}
