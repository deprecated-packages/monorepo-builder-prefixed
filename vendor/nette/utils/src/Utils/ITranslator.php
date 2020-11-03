<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperc00d4390f333\Nette\Localization;

/**
 * Translator adapter.
 */
interface ITranslator
{
    /**
     * Translates the given string.
     * @param  mixed  $message
     * @param  mixed  ...$parameters
     */
    function translate($message, ...$parameters) : string;
}
