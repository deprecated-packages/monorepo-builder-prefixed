<?php

declare (strict_types=1);
namespace _PhpScoper6bfbe5ea8949\PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;
\class_exists(\Composer\InstalledVersions::class);
/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'symplify/monorepo-builder';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS = array('composer/package-versions-deprecated' => '1.11.99@c8c9aa8a14cc3d3bec86d0a8c3fa52ea79936855', 'jean85/pretty-package-versions' => '1.5.1@a917488320c20057da87f67d0d40543dd9427f7a', 'nette/finder' => 'v2.5.2@4ad2c298eb8c687dd0e74ae84206a4186eeaed50', 'nette/utils' => 'v3.1.3@c09937fbb24987b2a41c6022ebe84f4f1b8eec0f', 'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6', 'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f', 'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0', 'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc', 'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29', 'symfony/config' => 'v5.1.8@11baeefa4c179d6908655a7b6be728f62367c193', 'symfony/console' => 'v5.1.8@e0b2c29c0fa6a69089209bbe8fcff4df2a313d0e', 'symfony/dependency-injection' => 'v5.1.8@829ca6bceaf68036a123a13a979f3c89289eae78', 'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665', 'symfony/error-handler' => 'v5.1.8@a154f2b12fd1ec708559ba73ed58bd1304e55718', 'symfony/event-dispatcher' => 'v5.1.8@26f4edae48c913fc183a3da0553fe63bdfbd361a', 'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2', 'symfony/filesystem' => 'v5.1.8@df08650ea7aee2d925380069c131a66124d79177', 'symfony/finder' => 'v5.1.8@e70eb5a69c2ff61ea135a13d2266e8914a67b3a0', 'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33', 'symfony/http-foundation' => 'v5.1.8@a2860ec970404b0233ab1e59e0568d3277d32b6f', 'symfony/http-kernel' => 'v5.1.8@a13b3c4d994a4fd051f4c6800c5e33c9508091dd', 'symfony/polyfill-ctype' => 'v1.20.0@f4ba089a5b6366e453971d3aad5fe8e897b37f41', 'symfony/polyfill-intl-grapheme' => 'v1.20.0@c7cf3f858ec7d70b89559d6e6eb1f7c2517d479c', 'symfony/polyfill-intl-normalizer' => 'v1.20.0@727d1096295d807c309fb01a851577302394c897', 'symfony/polyfill-mbstring' => 'v1.20.0@39d483bdf39be819deabf04ec872eb0b2410b531', 'symfony/polyfill-php73' => 'v1.20.0@8ff431c517be11c78c48a39a66d37431e26a6bed', 'symfony/polyfill-php80' => 'v1.20.0@e70aa8b064c5b72d3df2abd5ab1e90464ad009de', 'symfony/process' => 'v5.1.8@f00872c3f6804150d6a0f73b4151daab96248101', 'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1', 'symfony/string' => 'v5.1.8@a97573e960303db71be0dd8fda9be3bca5e0feea', 'symfony/var-dumper' => 'v5.1.8@4e13f3fcefb1fcaaa5efb5403581406f4e840b9a', 'symfony/yaml' => 'v5.1.8@f284e032c3cefefb9943792132251b79a6127ca6', 'symplify/autowire-array-parameter' => 'dev-master@083679c4b8376e42697761db3e1f8fca3b17e97b', 'symplify/composer-json-manipulator' => 'dev-master@86b5dc98e6d8a488bb7914072038dd64aa610231', 'symplify/console-color-diff' => 'dev-master@5ee746f77756b91986f0ce1f93a72d656f28f934', 'symplify/package-builder' => 'dev-master@130b6546bdb2ab67c9eabdb3b5d49df1384c9335', 'symplify/set-config-resolver' => 'dev-master@6f301b255822aac10ec382386083b05525c760a8', 'symplify/smart-file-system' => 'dev-master@962d275caa1eeb74ab6814881ae9f7750f3efa9e', 'symplify/symplify-kernel' => 'dev-master@9db36c72aa99eedda1ad6cbc3a863f34bff13e64', 'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea', 'myclabs/deep-copy' => '1.10.1@969b211f9a51aa1f6c01d1d2aef56d3bd91598e5', 'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4', 'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b', 'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556', 'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0', 'phpspec/prophecy' => '1.12.1@8ce87516be71aae9b956f81906aaf0338e0d8a2d', 'phpunit/php-code-coverage' => '7.0.10@f1884187926fbb755a9aaf0b3836ad3165b478bf', 'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946', 'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686', 'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e', 'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff', 'phpunit/phpunit' => '8.5.8@34c18baa6a44f1d1fbf0338907139e9dce95b997', 'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18', 'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da', 'sebastian/environment' => '4.2.3@464c90d7bdf5ad4e8a6aea15c091fec0603d4368', 'sebastian/exporter' => '3.1.2@68609e1261d215ea5b21b7987539cbfbe156ec3e', 'sebastian/global-state' => '3.0.0@edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4', 'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5', 'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be', 'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8', 'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9', 'sebastian/type' => '1.1.3@3aaaa15fa71d27650d62a948be022fe3b48541a3', 'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019', 'theseer/tokenizer' => '1.2.0@75a63c33a8577608444246075ea0af0d052e452a', 'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389', 'symplify/monorepo-builder' => '8.4.x-dev@');
    private function __construct()
    {
    }
    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!\class_exists(\Composer\InstalledVersions::class, \false) || !\Composer\InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }
        return \Composer\InstalledVersions::getRootPackage()['name'];
    }
    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName) : string
    {
        if (\class_exists(\Composer\InstalledVersions::class, \false) && \Composer\InstalledVersions::getRawData()) {
            return \Composer\InstalledVersions::getPrettyVersion($packageName) . '@' . \Composer\InstalledVersions::getReference($packageName);
        }
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }
        throw new \OutOfBoundsException('Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files');
    }
}
