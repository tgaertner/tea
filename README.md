# Tea example

[![GitHub CI Status](https://github.com/TYPO3-Documentation/tea/workflows/CI/badge.svg?branch=main)](https://github.com/TYPO3-Documentation/tea/actions)
[![Gitlab CI Status](https://gitlab.typo3.org/qa/example-extension/badges/main/pipeline.svg)](https://gitlab.typo3.org/qa/example-extension/-/pipelines)
[![Latest Stable Version](https://poser.pugx.org/ttn/tea/v/stable.svg)](https://packagist.org/packages/ttn/tea)
[![Total Downloads](https://poser.pugx.org/ttn/tea/downloads.svg)](https://packagist.org/packages/ttn/tea)
[![Latest Unstable Version](https://poser.pugx.org/ttn/tea/v/unstable.svg)](https://packagist.org/packages/ttn/tea)
[![License](https://poser.pugx.org/ttn/tea/license.svg)](https://packagist.org/packages/ttn/tea)

This TYPO3 extension is an example for writing unit and functional tests for
Extbase/Fluid-based extensions for TYPO3 CMS using PHPUnit.

It also is an example for
[best practices for extbase/fluid](https://github.com/oliverklee/workshop-handouts/tree/main/extbase-best-practices).

For information on the different ways to execute the tests, please have a look
at the [handout to my workshops on test-driven development (TDD)](https://github.com/oliverklee/tdd-reader).

## Running the unit tests from the command line

```bash
composer ci:tests:unit
```

## Running the tests in PhpStorm

File > Settings > Languages & Frameworks > PHP > Test Frameworks

- (*) Use Composer autoloader
- Path to script: select `.Build/vendor/autoload.php` in your project folder

In the Run configurations, edit the PHPUnit configuration and use these
settings so this configuration can serve as a template:

- Directory: use the `Tests/Unit` directory in your project
- (*) Use alternative configuration file
- use `.Build/vendor/nimut/testing-framework/res/Configuration/UnitTests.xml`
  in your project folder
- add the following environment variables:
  - typo3DatabaseUsername
  - typo3DatabasePassword
  - typo3DatabaseHost
  - typo3DatabaseName

### Unit tests configuration

In the Run configurations, copy the PHPUnit configuration and use these settings:

- Directory: use the `Tests/Unit` directory in your project

### Functional tests configuration

In the Run configurations, copy the PHPUnit configuration and use these settings:

- Directory: use the `Tests/Functional` directory in your project
- (x) Use alternative configuration file
- use `.Build/vendor/nimut/testing-framework/res/Configuration/FunctionalTests.xml`

### Running the acceptance tests

#### On the command line

1. make sure you have Chrome installed on your machine
2. `composer update codeception/codeception` (just in case)
3. [download the latest version of ChromeDriver](http://chromedriver.chromium.org/downloads)
4. unzip it
5. `chromedriver --url-base=wd/hub`
6. `.Build/vendor/bin/codecept run` (in another terminal)

#### In PhpStorm

1. make sure the "Codeception Framework" plugin is activated
2. right-click on `Tests/Acceptance/StarterCest.php`
3. Run 'Acceptance (Codeception)'

## Creating new extensions with automated tests

For creating new extensions, I recommend taking
[Helmut Hummel's extension skeleton](https://github.com/helhum/ext_scaffold)
as a starting point.

## Security

Libraries and extensions do not need the security check as they should not have
any restrictions concerning the other libraries they are installed alongside with
(unless those would create breakage), and they also do not have a `composer.lock`
which usually is the source for security checks.

Instead, the projects (i.e., for TYPO3 installations) need to have the security checks.

## Documentation rendering

In order to render documentation, first of all, clone repository

```
git clone https://github.com/TYPO3-Documentation/tea.git
```
then go to extension root

```
cd tea
```

and follow [this guide](https://docs.typo3.org/m/typo3/docs-how-to-document/master/en-us/RenderingDocs/Quickstart.html).


## More Documentation

* [Handout to my workshops on test-driven development (TDD)](https://github.com/oliverklee/tdd-reader)
* [Handout for best practices with extbase and fluid](https://github.com/oliverklee/workshop-handouts/blob/main/extbase-best-practices/extbase-best-practices.pdf)

## Other example projects

* [Selenium demo](https://github.com/oliverklee/selenium-demo)
  for using Selenium with PHPUnit
* [Anagram finder](https://github.com/oliverklee/anagram-finder)
  is the finished result of a code kata for TDD
* [Coffee example](https://github.com/oliverklee/coffee)
  is my starting point for demonstrating TDD with TYPO3 CMS
* [TDD Seed](https://github.com/oliverklee/tdd-seed)
  for starting PHPUnit projects with Composer (without TYPO3 CMS)
