# Lumen Url Host Fixer.

[![Latest Stable Version](https://poser.pugx.org/vluzrmos/lumen-url-host/version)](https://packagist.org/packages/vluzrmos/lumen-url-host) 
[![Total Downloads](https://poser.pugx.org/vluzrmos/lumen-url-host/downloads)](https://packagist.org/packages/vluzrmos/lumen-url-host)
[![License](https://poser.pugx.org/vluzrmos/lumen-url-host/license)](https://packagist.org/packages/vluzrmos/lumen-url-host)
[![Build Status](https://travis-ci.org/vluzrmos/lumen-url-host.svg)](https://travis-ci.org/vluzrmos/lumen-url-host)
[![StyleCI](https://styleci.io/repos/38911597/shield)](https://styleci.io/repos/38911597)

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
lumenUrlHost('your-disered.domain:port');
```

> Note: By default, lumen will cache the hostname and port at first call.
> That will works only if was called before first generated url.

I recommend to use on setUp() method of your tests, or in your `bootstrap/app.php`.
