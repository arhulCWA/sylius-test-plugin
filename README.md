# SyliusTestPlugin

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cwa/sylius-test-plugin.svg?style=flat-square)](https://packagist.org/packages/cwa/sylius-test-plugin)
[![Total Downloads](https://img.shields.io/packagist/dt/cwa/sylius-test-plugin.svg?style=flat-square)](https://packagist.org/packages/cwa/sylius-test-plugin)  

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

1. Run `composer require cwa/sylius-test-plugin`.

2. Import routes
    ```yaml
    # config/routes/sylius_shop.yaml

    cwa_sylius_test_shop:
        resource: "@CwaSyliusTestPlugin/config/shop_routing.yaml"
        prefix: /{_locale}
        requirements:
            _locale: ^[A-Za-z]{2,4}(_([A-Za-z]{4}|[0-9]{3}))?(_([A-Za-z]{2}|[0-9]{3}))?$

    # config/routes/sylius_admin.yaml

    cwa_sylius_test_admin:
        resource: "@CwaSyliusTestPlugin/config/admin_routing.yml"
        prefix: /admin
    ```

3. Import configuration
    ```yaml
    # config/packages/_sylius.yaml

    imports:
    # ...
    - { resource: "@CwaSyliusTestPlugin/config/config.yaml" }
    ```

4. Apply migrations
    ```bash
    bin/console doctrine:migrations:migrate
    ```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [All Contributors](../../contributors)

## License

Please see the [License File](LICENSE.md) for more information about licensing.
