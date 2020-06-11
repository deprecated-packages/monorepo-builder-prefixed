# Monorepo Builder Prefixed

[![Downloads](https://img.shields.io/packagist/dt/symplify/monorepo-builder-prefixed.svg?style=flat-square)](https://packagist.org/packages/symplify/monorepo-builder-prefixed)

Prefixed version of ECS compiled in PHAR with [`compiler`](https://github.com/symplify/symplify/tree/master/packages/monorepo-builder/compiler).

## Install

```bash
composer require symplify/monorepo-builder-prefixed --dev
```

### Phar file Version

`monorepo-builder.phar` is also included in this repository

```bash
wget https://github.com/symplify/monorepo-builder-prefixed/blob/master/monorepo-builder.phar?raw=true
```

### Non-Prefixed Version 

Head over to the ["Monorepo Builder" repository](https://github.com/symplify/monorepo-builder) for more information.

## Use

```bash
vendor/bin/monorepo-builder validate
```