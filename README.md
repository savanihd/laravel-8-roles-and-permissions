## Laravel 8 Roles And Permissions

Using Laravel/UI, Spatie and other

The tutorial [here](https://hdtuto.com/article/laravel-8-spatie-roles-and-permissions-tutorial)

To deliver you app on a server, you have to (on you dev environement) :

  * Git clone the tag/branch that you want to deliver
  * Launch the command `composer install`
  * Rename `env.example` to `env`
  * Adjust di env file
  * run `php artisan key:generate`
  * run `php artisan migrate:fresh --seed
  * and just run `php artisan serve`

That's all, you have a beautifull package that can be deliver on a server 
