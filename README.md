<h1 align="center"><img src="https://assets.infyom.com/open-source/infyom-logo.png" alt="InfyOm"></h1>

Laravel UPCItemDB
==========================

[![Total Downloads](https://poser.pugx.org/infyomlabs/laravel-upcitemdb/downloads)](https://packagist.org/packages/infyomlabs/laravel-upcitemdb)
[![Monthly Downloads](https://poser.pugx.org/infyomlabs/laravel-upcitemdb/d/monthly)](https://packagist.org/packages/infyomlabs/laravel-upcitemdb)
[![Daily Downloads](https://poser.pugx.org/infyomlabs/laravel-upcitemdb/d/daily)](https://packagist.org/packages/infyomlabs/laravel-upcitemdb)
[![License](https://poser.pugx.org/infyomlabs/laravel-upcitemdb/license)](https://packagist.org/packages/infyomlabs/laravel-upcitemdb)

Laravel Wrapper for [UPCItemDB](https://www.upcitemdb.com/).

## Installation

Install the package by the following command,

    composer require infyomlabs/laravel-upcitemdb

## Publish the config file

Run the following command to publish config file,

    php artisan vendor:publish --provider="InfyOm\UPCItemDB\UPCItemDBServiceProvider"

## Add Facade

Add the Facade to your `config/app.php` into `aliases` section,

    'UPCItemDB' => \InfyOm\UPCItemDB\UPCItemDB::class,

## Usage

### Lookup

For UPC Lookup, use the lookup method by calling,
   
    \UPCItemDB::lookup('4002293401102');

### Search

For Search API, you can use the search method,
   
    \UPCItemDB::search('iphone 6');

    \UPCItemDB::search('iphone 6', [
        'brand' => 'apple'
    ]);

## Support Us

We have created [14+ Laravel packages](https://github.com/InfyOmLabs) and invested a lot of resources into creating these all packages and maintaining them.

You can support us by either sponsoring us or buying one of our paid products. Or help us by spreading the word about us on social platforms via tweets and posts.

### Sponsors

[Become a sponsor](https://opencollective.com/infyomlabs#sponsor) and get your logo on our README on Github with a link to your site.

<a href="https://opencollective.com/infyomlabs#sponsor"><img src="https://opencollective.com/infyomlabs/sponsors.svg?width=890"></a>

### Backers

[Become a backer](https://opencollective.com/infyomlabs#backer) and get your image on our README on Github with a link to your site.

<a href="https://opencollective.com/infyomlabs#backer"><img src="https://opencollective.com/infyomlabs/backers.svg?width=890"></a>

### Buy our Paid Products

[![InfyJobs](https://assets.infyom.com/open-source/infyjobs-banner.png)](https://1.envato.market/P0ONVj)

You can also check out our other paid products on [CodeCanyon](https://codecanyon.net/user/infyomlabs/portfolio).

### Follow Us

- [Twitter](https://twitter.com/infyom)
- [Facebook](https://www.facebook.com/infyom)
- [LinkedIn](https://in.linkedin.com/company/infyom-technologies)
- [Youtube](https://www.youtube.com/channel/UC8IvwfChD6i7Wp4yZp3tNsQ)
- [Contact Us](https://infyom.com/contact-us)

