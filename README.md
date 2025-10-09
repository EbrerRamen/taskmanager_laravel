# Laravel Task Manager

**This is a very basic project created with Laravel for learning purposes.**  
It demonstrates how to perform **CRUD (Create, Read, Update, Delete)** operations using Laravel and provides a simple task management interface.

---

## Features

- Add new tasks
- Edit task titles
- Mark tasks as complete/incomplete
- Delete tasks
- Success messages for actions
- Clean UI using Tailwind CSS

---

## Installation

1. Clone the repository:

```bash
    git clone https://github.com/your-username/taskmanager.git
    cd taskmanager
```
2. Install dependencies using Composer
```bash
    composer install
```
3. Copy the .env.example file to .env and configure your database:
```bash
    cp .env.example .env
```
Set database credentials in .env:
```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=taskmanager
    DB_USERNAME=root
    DB_PASSWORD=
```
4. Generate application key:
```bash
    php artisan key:generate
```
5. Run migrations to create the tasks table:
```bash
    php artisan migrate
```
6. Start the development server:
```bash
    php artisan serve
```
Visit http://127.0.0.1:8000 in your browser.

---

# Usage

- Add Task: Enter a task title in the input box and click Add.
- Edit Task: Update the task title directly and click Update.
- Mark Complete/Incomplete: Click on the task title to toggle completion.
- Delete Task: Click the 🗑 icon to delete a task.

---

# Tech Stack

- PHP 8.x
- Laravel 12.x
- MySQL
- Tailwind CSS

---

# Notes

- This project is for learning purposes only.
- Focused on demonstrating basic CRUD functionality in Laravel.
- UI is built with Tailwind CSS for simplicity and responsiveness.

---
