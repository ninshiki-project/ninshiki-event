# Ninshiki Event Dispatcher

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ninshiki-project/ninshiki-event.svg?style=flat-square)](https://packagist.org/packages/ninshiki-project/ninshiki-event)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ninshiki-project/ninshiki-event/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ninshiki-project/ninshiki-event/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)


## Installation

You can install the package via composer:

```bash
composer require ninshiki-project/ninshiki-event
```

## Events

| Events                                                        |
|---------------------------------------------------------------|
| `MarJose123\NinshikiEvent\Events\Post\NewPostAdded`           |
| `MarJose123\NinshikiEvent\Events\Post\PostToggleLike`         |
| `MarJose123\NinshikiEvent\Events\Session\LogoutOtherBrowser`  |
| `MarJose123\NinshikiEvent\Events\Session\UserChangedPassword` |
| `MarJose123\NinshikiEvent\Events\Session\UserLogin`           |
| `MarJose123\NinshikiEvent\Events\Session\UserLogout`          |
| `MarJose123\NinshikiEvent\Events\Shop\NewProductAdded`        |
| `MarJose123\NinshikiEvent\Events\Shop\UserRedeemFromShop`     |
| `MarJose123\NinshikiEvent\Events\User\UserAdded`              |
| `MarJose123\NinshikiEvent\Events\User\UserDeleted`            |
| `MarJose123\NinshikiEvent\Events\User\UserUpdated`            |



## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [MarJose123](https://github.com/ninshiki-project)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
