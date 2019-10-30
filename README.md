# Laravel UPCItemDB

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
   
    \UPCItemDB::search('iphone');

    \UPCItemDB::search('iphone', [
        'brand' => 'apple'
    ]));

