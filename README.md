# Max CMS

## Install

`"ducsatthu/maxcms" : "0.1.*"`

and add from composer.json

```
"repositories": [
        {
            "type": "git",
            "url": "https://github.com/ducsatthu/maxcms"
        }
    ],
 ```
 
 add this from config/app.php
 
 ```php
 ducsatthu\maxcms\maxcmsServiceProvider::class,
 ```
## Usage

``` php
php artisan vendor:publish
php artisan migrate
```
