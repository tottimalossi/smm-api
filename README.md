### class for work with smm api
https://justanotherpanel.com

add this to composer.json and run `composer update"`
```
   "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/tottimalossi/SMM-API.git"
        }
    ],
  "require": {
    ...
    "tottimalossi/smm-api": "dev",
     ...
    }
```
``php artisan vendor:publish --provider="tottimalossi\SmmAPI\SmmAPIServiceProvider"
``
and add to .env
```
SMM_API_KEY=YOURAPIKEY
```
