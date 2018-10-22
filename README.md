About API
=========
Single endpoint API for resume profile serving.

Setup and data import
---------------------
- Run `composer install`
- Drop database schema `bin/console d:s:d -f` (optional, if previous schema exists) 
- Create database schema `bin/console d:s:c`
- Import data `bin/console d:d:i path/to/data.sql` (optional, demo profile is defined in bundle config) 
- Start web server `bin/console server:run`
- Visit in browser or curl [http://127.0.0.1:8000/profile/rest/v1/profiles/nickname](http://127.0.0.1:8000/profile/rest/v1/profiles/nickname)

Testing
-------
- Run `./vendor/bin/phpunit`

Heroku
------
This app has additional config and files for simple deployment to heroku.
