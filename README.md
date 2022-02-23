# surge-test-api

## Table of Contents

## Setup
1. `composer install`
2. Rename __.env.example__ to __.env__
3. `php artisan key:generate`
4. Configure database credentials in __.env__
    + If the DB password has symbols like '#', wrap the password in speech marks ex: `DB_PASSWORD="dfg555###"` otherwise '#' breaks the text
5. Database setup and seeding
    > `php artisan migrate`
    > `php artisan db:seed`
    > `php artisan db:seed RolesAndPermissionsSeeder`
    > `php artisan db:seed UserAccessSeeder`
6. Serve using `php artisan serve`