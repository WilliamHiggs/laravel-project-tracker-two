# Laravel Project Tracker II

Laravel and Vue3 + Vuex using TailwindCSS for styling and Sanctum for authentication.

## Features

-   Laravel 8
-   Vue + VueRouter + Vuex
-   Login, register, reset password, update profile, create task, create projects.
-   Authentication with Sanctum
-   Tailwind + Heroicons

## Installation

-   `git clone git@github.com:WilliamHiggs/laravel-project-tracker-two.git`
-   `cd laravel-project-tracker-two`
-   Edit `.env` and set your database connection details
-   `npm install`
-   Install Docker https://www.docker.com/
-   `./vendor/bin/sail up`
-   `php artisan key:generate`
-   `php artisan migrate`
-   `php artisan queue:work`

## Usage

#### Development

```bash
npm run watch

```

#### Production

```bash
npm run production
```
