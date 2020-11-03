<?php

declare (strict_types=1);
namespace _PhpScopere73d4c0b7ec8\PackageVersions;

use OutOfBoundsException;
/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    const ROOT_PACKAGE_NAME = 'symplify/monorepo-builder';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS = array('composer/package-versions-deprecated' => '1.8.0@98df7f1b293c0550bd5b1ce6b60b59bdda23aa47', 'jean85/pretty-package-versions' => '1.2@75c7effcf3f77501d0e0caa75111aff4daa0dd48', 'nette/finder' => 'v2.5.0@6be1b83ea68ac558aff189d640abe242e0306fe2', 'nette/utils' => 'v3.0.0@ec1e4055c295d73bb9e8ce27be859f434a6f6806', 'paragonie/random_compat' => 'v1.0.0@a1d9f267eb8b8ad560e54e397a5ed1e3b78097d1', 'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6', 'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f', 'psr/log' => '1.0.0@fe0936ee26643249e916849d48e3a51d5f5e278b', 'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29', 'symfony/config' => 'v4.4.0@f08e1c48e1f05d07c32f2d8599ed539e62105beb', 'symfony/console' => 'v4.4.0@35d9077f495c6d184d9930f7a7ecbd1ad13c7ab8', 'symfony/debug' => 'v4.4.0@b24b791f817116b29e52a63e8544884cf9a40757', 'symfony/dependency-injection' => 'v4.4.0@d4439814135ed1343c93bde998b7792af8852e41', 'symfony/error-handler' => 'v4.4.0@e1acb58dc6a8722617fe56565f742bcf7e8744bf', 'symfony/event-dispatcher' => 'v4.4.0@ab1c43e17fff802bef0a898f3bc088ac33b8e0e1', 'symfony/event-dispatcher-contracts' => 'v1.1.1@8fa2cf2177083dd59cf8e44ea4b6541764fbda69', 'symfony/filesystem' => 'v4.4.0@d12b01cba60be77b583c9af660007211e3909854', 'symfony/finder' => 'v4.4.0@ce8743441da64c41e2a667b8eb66070444ed911e', 'symfony/http-foundation' => 'v4.4.0@502040dd2b0cf0a292defeb6145f4d7a4753c99c', 'symfony/http-kernel' => 'v4.4.0@5a5e7237d928aa98ff8952050cbbf0135899b6b0', 'symfony/mime' => 'v4.3.0@0b166aee243364cd9de05755d2e9651876090abb', 'symfony/polyfill-ctype' => 'v1.8.0@7cc359f1b7b80fc25ed7796be7d96adc9b354bae', 'symfony/polyfill-intl-idn' => 'v1.18.0@bc6549d068d0160e0f10f7a5a23c7d1406b95ebe', 'symfony/polyfill-intl-normalizer' => 'v1.10.0@f8ed52909fc049b42a772c64ec1e6b31792abad6', 'symfony/polyfill-mbstring' => 'v1.1.0@1289d16209491b584839022f29257ad859b8532d', 'symfony/polyfill-php70' => 'v1.10.0@6b88000cdd431cd2e940caa2cb569201f3f84224', 'symfony/polyfill-php72' => 'v1.10.0@9050816e2ca34a8e916c3a0ae8b9c2fccf68b631', 'symfony/polyfill-php73' => 'v1.9.0@990ca8fa94736211d2b305178c3fb2527e1fbce1', 'symfony/process' => 'v4.4.0@75ad33d9b6f25325ebc396d68ad86fd74bcfbb06', 'symfony/service-contracts' => 'v1.1.6@ea7263d6b6d5f798b56a45a5b8d686725f2719a3', 'symfony/var-dumper' => 'v4.4.0@eade2890f8b0eeb279b6cf41b50a10007294490f', 'symfony/yaml' => 'v4.4.0@76de473358fe802578a415d5bb43c296cf09d211', 'symplify/autowire-array-parameter' => 'dev-master@083679c4b8376e42697761db3e1f8fca3b17e97b', 'symplify/composer-json-manipulator' => 'dev-master@86b5dc98e6d8a488bb7914072038dd64aa610231', 'symplify/console-color-diff' => 'dev-master@5ee746f77756b91986f0ce1f93a72d656f28f934', 'symplify/package-builder' => 'dev-master@130b6546bdb2ab67c9eabdb3b5d49df1384c9335', 'symplify/set-config-resolver' => 'dev-master@6f301b255822aac10ec382386083b05525c760a8', 'symplify/smart-file-system' => 'dev-master@962d275caa1eeb74ab6814881ae9f7750f3efa9e', 'symplify/symplify-kernel' => 'dev-master@9db36c72aa99eedda1ad6cbc3a863f34bff13e64', 'dflydev/markdown' => 'v1.0.0@76501a808522dbe40a5a71d272bd08d54cbae03d', 'doctrine/instantiator' => '1.2.0@a2c590166b2133a4633738648b6b064edae0814a', 'myclabs/deep-copy' => '1.9.1@e6828efaba2c9b79f4499dae1d66ef8bfa7b2b72', 'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4', 'phpdocumentor/reflection-docblock' => '2.0.0@66ae84e9d7c8ea85c979cb65977bd8e608baf0c5', 'phpspec/prophecy' => '1.8.1@1927e75f4ed19131ec9bcc3b002e07fb1173ee76', 'phpunit/php-code-coverage' => '7.0.7@7743bbcfff2a907e9ee4a25be13d0f8ec5e73800', 'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946', 'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686', 'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e', 'phpunit/php-token-stream' => '3.1.0@e899757bb3df5ff6e95089132f32cd59aac2220a', 'phpunit/phpunit' => '8.5.0@3ee1c1fd6fc264480c25b6fb8285edefe1702dab', 'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18', 'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da', 'sebastian/environment' => '4.2.2@f2a2c8e1c97c11ace607a7a667d73d47c19fe404', 'sebastian/exporter' => '3.1.1@06a9a5947f47b3029d76118eb5c22802e5869687', 'sebastian/global-state' => '3.0.0@edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4', 'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5', 'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be', 'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8', 'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9', 'sebastian/type' => '1.1.3@3aaaa15fa71d27650d62a948be022fe3b48541a3', 'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019', 'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9', 'symplify/monorepo-builder' => '8.4.x-dev@');
    private function __construct()
    {
    }
    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }
        throw new \OutOfBoundsException('Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files');
    }
}
