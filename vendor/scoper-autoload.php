<?php

// scoper-autoload.php @generated by PhpScoper

$loader = require_once __DIR__.'/autoload.php';

// Aliases for the whitelisted classes. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#class-whitelisting
if (!class_exists('ComposerAutoloaderInit79a2e8f056f46af2cc77df4af47f3800', false) && !interface_exists('ComposerAutoloaderInit79a2e8f056f46af2cc77df4af47f3800', false) && !trait_exists('ComposerAutoloaderInit79a2e8f056f46af2cc77df4af47f3800', false)) {
    spl_autoload_call('_PhpScopera2c403aec9a8\ComposerAutoloaderInit79a2e8f056f46af2cc77df4af47f3800');
}
if (!class_exists('Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator', false) && !interface_exists('Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator', false) && !trait_exists('Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator', false)) {
    spl_autoload_call('_PhpScopera2c403aec9a8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator');
}
if (!class_exists('Normalizer', false) && !interface_exists('Normalizer', false) && !trait_exists('Normalizer', false)) {
    spl_autoload_call('_PhpScopera2c403aec9a8\Normalizer');
}
if (!class_exists('JsonException', false) && !interface_exists('JsonException', false) && !trait_exists('JsonException', false)) {
    spl_autoload_call('_PhpScopera2c403aec9a8\JsonException');
}
if (!class_exists('Attribute', false) && !interface_exists('Attribute', false) && !trait_exists('Attribute', false)) {
    spl_autoload_call('_PhpScopera2c403aec9a8\Attribute');
}
if (!class_exists('Stringable', false) && !interface_exists('Stringable', false) && !trait_exists('Stringable', false)) {
    spl_autoload_call('_PhpScopera2c403aec9a8\Stringable');
}
if (!class_exists('UnhandledMatchError', false) && !interface_exists('UnhandledMatchError', false) && !trait_exists('UnhandledMatchError', false)) {
    spl_autoload_call('_PhpScopera2c403aec9a8\UnhandledMatchError');
}
if (!class_exists('ValueError', false) && !interface_exists('ValueError', false) && !trait_exists('ValueError', false)) {
    spl_autoload_call('_PhpScopera2c403aec9a8\ValueError');
}

// Functions whitelisting. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#functions-whitelisting
if (!function_exists('composerRequire79a2e8f056f46af2cc77df4af47f3800')) {
    function composerRequire79a2e8f056f46af2cc77df4af47f3800() {
        return \_PhpScopera2c403aec9a8\composerRequire79a2e8f056f46af2cc77df4af47f3800(...func_get_args());
    }
}
if (!function_exists('setproctitle')) {
    function setproctitle() {
        return \_PhpScopera2c403aec9a8\setproctitle(...func_get_args());
    }
}
if (!function_exists('includeIfExists')) {
    function includeIfExists() {
        return \_PhpScopera2c403aec9a8\includeIfExists(...func_get_args());
    }
}
if (!function_exists('dump')) {
    function dump() {
        return \_PhpScopera2c403aec9a8\dump(...func_get_args());
    }
}
if (!function_exists('dd')) {
    function dd() {
        return \_PhpScopera2c403aec9a8\dd(...func_get_args());
    }
}

return $loader;
