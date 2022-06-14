# divide-two-parts

Print YES, if you can divide something into two parts

## Installation

This project using composer.

```
$ composer require buriti8/divide-two-parts
```

## Usage

Validate if you can divide something into two parts.

```php
<?php

use DivideTwoParts\Divide;

$divide = new Divide(10);

echo $divide->validate();
```
