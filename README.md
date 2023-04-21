TYPO3 peak memory
=================

This extension adds a HTTP middleware to the TYPO3 frontend and
backend stack that sets the HTTP header `X-TYPO3-PHP-peak-memory`
with the of PHP `memory_get_peak_usage()` in bytes.

This extension is an easy way to get an idea which requests may
be especially memory hungry, and if changes to the codebase
affect memory consumption.

The middleware is positioned very early (or late, depending on how
you look at it) to catch the majority of the TYPO3 request processing.

The header is added in backend requests, if `$GLOBALS['TYPO3_CONF_VARS']['BE']['debug']` is
configured to `true`, and in frontend, if `$GLOBALS['TYPO3_CONF_VARS']['FE']['debug']` is
configured to `true`.


# Installation

## Composer

You probably want to install this as `--dev` dependency. The extension currently
supports TYPO3 v11 and TYPO3 v12:

```
$ composer require --dev lolli/peak-memory
```

## TYPO3 Extension Repository

Extension key is registered, but the extension is currently not released to TER.


# Usage

When debug mode and stuff is on, all HTTP requests that go through TYPO3
add the HTTP header. Use browser inspectors or something to see them.


# Tagging and releasing

[packagist.org](https://packagist.org/packages/lolli/peak-memory) is enabled via the casual github hook.

Example:

```
composer req --dev typo3/tailor
vendor/bin/tailor set-version 0.1.0
composer rem --dev typo3/tailor
git commit -am "[RELEASE] 0.1.0 Initial release"
git tag 0.1.0
git push
git push --tags
```
