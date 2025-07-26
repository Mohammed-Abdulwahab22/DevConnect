# 🚀 DevConnect – A Developer Hub

**DevConnect** is a Laravel-powered social platform for developers to share thoughts, showcase profiles, and connect with others. This project was built as a demonstration of my Laravel backend development skills, database integration with PostgreSQL, and understanding of full-stack architecture using Laravel Blade.

---

## 🛠️ Built With

- **Laravel 11** – Backend & Blade templating
- **PostgreSQL** – Relational database
- **Blade** – Laravel’s templating engine for frontend UI
- **Auth Scaffolding** – Laravel Breeze

---

## 🔐 Core Features

- User registration & authentication
- Secure login/logout flow
- Home feed of posts
- Individual profile pages
- PostgreSQL integration
- Clean UI with Blade components

---

## 📦 Getting Started

To run the project locally:

```bash
git clone https://github.com/Mohammed-Abdulwahab22/DevConnect.git
cd devconnect
cp .env.example .env
composer install
php artisan key:generate
# Configure your PostgreSQL DB in .env
php artisan migrate
php artisan serve

Note: This is not a fully-featured application. It was built to demonstrate my understanding of Laravel, authentication, database integration, and Blade templating.
