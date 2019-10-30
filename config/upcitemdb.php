<?php

return [

    /*
    |-------------------------------------------------------------------------------------------
    | URL - UPC Item DB has different url endpoints for different plans.
    | Free - https://api.upcitemdb.com/prod/trial/
    | Paid (DEV/PRO) - https://api.upcitemdb.com/prod/v1/
    | Based on plan you are using, you can change the url here and specify different urls
    |-------------------------------------------------------------------------------------------
    |
    */

    'url' => 'https://api.upcitemdb.com/prod/trial/',

    /*
    |-------------------------------------------------------------------------------------------
    | Key Type - Needed for paid plans
    |-------------------------------------------------------------------------------------------
    |
    */
    'key_type' => '',

    /*
    |-------------------------------------------------------------------------------------------
    | User Key - Needed for paid plans
    |-------------------------------------------------------------------------------------------
    |
    */
    'user_key' => '',
];
