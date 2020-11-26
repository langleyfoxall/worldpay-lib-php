# Worldpay PHP Library

This is a fork of the [official Worldpay PHP library](https://github.com/Worldpay/worldpay-lib-php), 
which is currently unmaintained.

## Requirements

* PHP 7.1 or above
* Curl PHP extension


## Installation

### Composer

Run the following Composer command from the root of your project.

```bash
composer require langleyfoxall/worldpay-lib-php
```
### Manual

If you need to use this library in a legacy environment without auto-loading, you can
require the `init.php` file as shown below.

```php
require_once('worldpay-php/init.php');
```

## Session Management

As part of the 3D secure handling, the Worldpay PHP library makes use of its own session handling.
You now need to set a session driver that will be used via the `WorldPaySessionHandler::setDriver()`
method.

Two drivers are currently available, as follows.

* Native PHP session driver - `WorldPaySessionHandler::setDriver(new NativePHPSessionDriver())`
* Laravel session driver - `WorldPaySessionHandler::setDriver(new LaravelSessionDriver())`

You should always use the most appropriate driver for your codebase.
For example, using the native PHP session driver may cause issues if used within a Laravel
application.

## Documentation
https://online.worldpay.com/docs

## API Reference
https://online.worldpay.com/api-reference

## Examples

### index.php
Uses WorldpayJS to generate a token that is posted to create_order.php.
**Change your client key**

### create_order.php
Creates a Worldpay order with a posted token.
**Change your service key*

### 3ds_redirect.php
Authorizes a 3DS order
**Change your service key*

### refund.php
Enter your Worldpay order code and posts it to refund_order.php

### refund_order.php
Refunds a Worldpay order with a posted order code
**Change your service key**

### partial_refund.php
Enter your Worldpay order code and amount to refund and posts it to partial_refund_order.php

### partial_refund_order.php
Refunds a Worldpay order with a posted order code
**Change your service key**

### stored_cards.php
Enter your Worldpay reusable token and posts it to stored_cards.php

### get_stored_cards.php
Shows stored card details from posted token
**Change your service key*
