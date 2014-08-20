## Laravel Permissions

Check out the article on my blog: [Here](http://josephralph.co.uk/laravel-simple-route-based-access-control/)

## Files to Note

The files to note in this setup are:

- app/routes.php
- app/filters.php
- app/models/User.php
- app/models/Permission.php
- Migrations in app/migrations

## Get it Working

To get this example working, just clone the repo into a folder you can access on your server/localhost and run `composer install`.

Once done, run `php artisan migrate` to create the sqlite database structure.

You will then need to create the permissions and users your self. (See blog article for example.)
