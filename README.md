# Laravel-inertia-vue-spa

Developed with [Laravel 8](https://laravel.com/docs/8.x), [Inertia](https://inertiajs.com/) and [Vue](https://vuejs.org/).

## About Laravel-inertia-vue-spa

Laravel-inertia-vue-spa is an application built to understand [Inertia](https://inertiajs.com/). It does not implement [Laravel Jetstream](https://jetstream.laravel.com/1.x/introduction.html), which makes it easier to understand the basic concepts of Inertia. The [wiki](https://github.com/marcoandre1/laravel-inertia-vue-spa/wiki) offers a complete walkthrough of the application.

## Usage

Simply clone this repo and run `composer install` to install all the required dependencies. Make sure to rename the `.env.example` file to `.env` and also run `php artisan key:generate` to generate an application key for this Laravel API. Finally, run `php vendor/bin/homestead make` on **Mac / Linux** or `vendor\\bin\\homestead make` on **Windows** to generate the `Vagrantfile` and the `Homestead.yaml`. Run the `vagrant up` command in your terminal and access your project at `http://homestead.test` in your browser.

> On a fresh install, don't forget to run `npm install` & `npm run dev`

## License

Laravel-inertia-vue-spa is open-source licensed under the [MIT license](https://opensource.org/licenses/MIT).
