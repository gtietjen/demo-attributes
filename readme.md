## Demo App of [Cartalyst's](https://cartalyst.com) Attributes Package

> **Note:** This app requires Cartalyst's Attributes package, you need to have a valid Cartalyst.com subscription to install it. Click [here](https://www.cartalyst.com/pricing) to obtain your subscription.

### Installation

1. Download or clone this repository
2. Run `composer install` from your terminal
3. Setup your database in `app/config/database.php`
4. Run migrations
	- `php artisan migrate --package=cartalyst/attributes`
	- `php artisan migrate --seed`
5. Boot up your server!