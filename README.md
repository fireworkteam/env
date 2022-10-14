# Firework PHP : Env Service

## Basic usage

```php
<?php

use Firework\Env\Env;
require __DIR__ . "/../vendor/autoload.php";

$env = new Env();

print_r($env->getEnv());
```

## Docs

### getEnv()
Get env settings from .env

```php
$env->getEnv();
```