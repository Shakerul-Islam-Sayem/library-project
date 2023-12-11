<p align="center"><a href="https://laravel.com" target="_blank"><img src="public/images/brand-logos/library-dark.png" width="400" alt="Library Management System"></a></p>

# Library Management System

A Laravel-based Library Management System with essential features:

- **Manage Authors:** CRUD operations for authors.
- **Manage Publishers:** Add, view, edit, and remove publishers.
- **Manage Categories:** Create, modify, and delete book categories.
- **Manage Books:** Add, update, and remove books with details.
- **Manage Students:** Create, edit, and delete student profiles.
- **Book Transactions:** Issue books to students and record returns.

## Quick Start 
clone the repository
```
git clone https://github.com/Shakerul-Islam-Sayem/library-project.git
```
change current directory

```
cd library-project
```
install dependencies
```
composer install
````
If "composer install" doesn't work
```
composer update
````
install js dependencies
```
npm install && npm run dev
````
create .env file
```
cp .env.example .env
```
generate env key
```
php artisan key:generate
```
migrate the migration and seed the database
```
php artisan migrate:fresh --seed
```
start server
```
php artisan serve
```
credentails
```
username: sayem
password: password
```
# That's all 📚📖

```
Make sure to leave a start ✨✨
```
