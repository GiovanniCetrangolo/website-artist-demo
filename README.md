# Violinist Portfolio Website

## Overview

This project is a portfolio website developed using **Laravel** and **MySQL**.  
It allows visitors to explore the artist's media gallery, view projects, browse the musical repertoire, and submit booking requests. An administrative dashboard provides content management functionalities for the website.

## Features

- Homepage presenting the artist and the main website sections.
- Media gallery supporting images and YouTube videos.
- Project and musical repertoire management.
- Booking request form for visitors.
- CRUD operations for Media, Projects, and Repertoire.
- Administrative dashboard for content management.
- Booking request management.
- Input validation using Laravel FormRequests.
- Role-based access control with Middleware.
- File management using Laravel Storage.
- Email notifications for booking requests.
- Responsive frontend with reusable Blade templates.

## Technical Details

- Backend: Laravel, PHP
- Database: MySQL with migrations and seeders
- Frontend: Blade templates, HTML, CSS, JavaScript
- Authentication: Laravel Authentication and Middleware
- Architecture: Services, Repositories, Controllers, and Models

## Structure

- `app/Models` – Eloquent models
- `app/Repositories` – Repository classes for database interactions
- `app/Services` – Business logic
- `app/Http/Controllers` – Controllers for HTTP requests
- `app/Http/Requests` – FormRequest classes for validation
- `app/Http/Middleware` – Middleware for access control
- `resources/views` – Blade templates for public pages and admin dashboard
- `database/migrations` – Database table definitions
- `database/seeders` – Seeders for initial and demo data

## Installation

1. Clone the repository:

   git clone <repository-url>

2. Install dependencies:

   composer install

3. Copy `.env.example` to `.env` and configure your database:

   cp .env.example .env


4. Generate the application key:

   php artisan key:generate


5. Run migrations and seeders:

   php artisan migrate --seed

6. Create the storage symbolic link:

   php artisan storage:link

7. Serve the application:

   php artisan serve