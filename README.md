# 📊 Laravel Review Management System

This is a Review Management System built using **Laravel**. The system allows users to manage reviews, assign cards, and activate or deactivate them. It also includes functionalities to assign users to cards and filter reviews based on card ID and date.

## 🚀 Features
- 🎴 **Manage Cards**
- 👥 **Assign Users to Cards**
- ✅ **Activate/Deactivate Cards**
- 📝 **Log and Manage Reviews**
- 🔎 **Filter Reviews by Card ID and Date**
- ⚙️ **Custom Command to Migrate and Seed the Database**

## 📋 Requirements
- 📌 **PHP >= 8.1**
- 📌 **Composer**
- 📌 **Laravel 11 (or compatible version)**
- 📌 **MySQL** (or any other supported database)

## 🛠️ Installation

### Step 1: Clone the Repository
Clone this repository to your local machine.

```bash
git clone https://github.com/Loguvan-LK/Review-Management.git
cd review-management

```

### Step 2: Install Dependencies
Run the following command to install the necessary dependencies.

``` bash

composer install

```
### Step 3: Set Up Environment
.env.example file to .env
``` bash
 cp .env.example .env

```
Make sure to set the correct database connection details in the .env file.

### Step 4: Generate Application Key
Run the following command to generate the application key.

``` bash
php artisan key:generate

```
### Step 5: Migrate and Seed the Database
You can run migrations and seed the database using the custom command db:migrate-and-seed.

To do so, simply run:

``` bash
php artisan db:migrate-and-seed
```

This will:

🛠️ Run all database migrations
🌱 Seed the database with default data
Step 6: Serve the Application
After setting up the database, you can serve the application locally using:

```bash
php artisan serve
```
You can now access the application at

```bash 
http://localhost:8000
```

### ⚙️ Functionality
### 🎴 Cards Management
Create Cards: Navigate to the "Create Card" button to log new cards.
Assign Users: You can assign users to cards by selecting a user from the dropdown list.
Activate/Deactivate Cards: Cards can be activated or deactivated, and the corresponding buttons will be disabled based on the card's current status.
### 📝 Reviews Management
Log Reviews: You can log new reviews for cards.
View Reviews: All reviews are displayed with the card name, date, time, and location.
Filter Reviews: Reviews can be filtered by card ID or date.
Edit/Delete Reviews: Reviews can be edited or deleted.
### ⚙️ Custom Command
A custom command 

``` bash 
php artisan db:migrate-and-seed 
```

has been created to simplify the process of running migrations and seeders together. This command will:

🛠️ Run the database migrations.
🌱 Seed the database with default values.
To use this command, simply run:

``` bash
php artisan db:migrate-and-seed
```
📝 License
This project is open source and available under the MIT License.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# Review-Management

Happy coding! 🚀# Revie-management-system
