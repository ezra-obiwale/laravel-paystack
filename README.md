# laravel-paystack

A wrapper around the official [paystack](https://github.com/yabacon/paystack-php) library for laravel.

## Installation

```bash
composer require d-scribe/laravel-paystack
```

For Laravel <= 5.4:

1. Add `Paystack\Providers\ServiceProvider` to the providers section in **config\app.php** file like

    ```php
    'providers' => [
        // ...
        Paystack\Providers\ServiceProvider::class,
    ]
    ```

2. Add `Paystack\Facades\Api` to the aliases section in **config\app.php** file like

    ```php
    'aliases' => [
        // ...
        'PaystackApi' => Paystack\Facades\Api::class
    ]
    ```

3. Create `PAYSTACK_SECRET_KEY` variable in the `.env` file

## Usage

See [https://github.com/yabacon/paystack-php](https://github.com/yabacon/paystack-php).