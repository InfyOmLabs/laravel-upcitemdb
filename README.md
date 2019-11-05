<h1 align="center"><img src="http://infyom.com/images/logo-red-black.png" alt="InfyOm"></h1>


# Laravel UPCItemDB

Laravel Wrapper for [UPCItemDB](https://www.upcitemdb.com/).

[![Total Downloads](https://poser.pugx.org/infyomlabs/laravel-upcitemdb/downloads)](https://packagist.org/packages/infyomlabs/laravel-upcitemdb)
[![Monthly Downloads](https://poser.pugx.org/infyomlabs/laravel-upcitemdb/d/monthly)](https://packagist.org/packages/infyomlabs/laravel-upcitemdb)
[![Daily Downloads](https://poser.pugx.org/infyomlabs/laravel-upcitemdb/d/daily)](https://packagist.org/packages/infyomlabs/laravel-upcitemdb)
[![License](https://poser.pugx.org/infyomlabs/laravel-upcitemdb/license)](https://packagist.org/packages/infyomlabs/laravel-upcitemdb)


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

