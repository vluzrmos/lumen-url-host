# Lumen Url Host Fixer.

A fixer to Lumen Url Generator.

## What is it for?

When running tests or console commands which needs some urls by default that will be
`http://:/foo` instead of your desired hostname and port.

## Install

```
composer require vluzrmos/lumen-url-host
```

## Usage

Run 1 time:

```php
lumenHttpHost('your-disered.domain:port');
```

> Note: By default, lumen will cache the hostname and port at first call.
> That will works only if was called before first generated url.

I recommend to use on setUp() method of your tests, or in your `bootstrap/app.php`.
