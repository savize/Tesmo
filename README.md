# 🌐 Tesmo Project

This repository contains the source code for one of my projects named **Tesmo**, built with **PHP, Laravel, HTML, CSS and JavaScript**.

## 🚀 Overview

This project is an online grocery platform designed to enhance the shopping experience with a user-friendly and secure interface. Built using PHP and Laravel, it supports user registration and secure authentication. Users can easily browse through categorized products, search for specific items, and add them to a dynamic shopping basket. The platform features a seamless checkout process, integrated with a built-in wallet system that enables users to manage funds. Additionally, users can create an account and login as an existing customer and view their shopping basket history.

## 📸 Tesmo Preview

![Portfolio Screenshot](assets/img/tesmo.jpg)

## 🛠️ Run This Project Locally

### Prerequisites
Make sure you have the following installed:
- [PHP](https://www.php.net/) (>= 8.0 recommended)
- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/) CLI (optional, but helpful)
- [MySQL](https://www.mysql.com/) or another supported database
- [Node.js](https://nodejs.org/) & npm (for frontend assets, if applicable)

### 🚀 Steps to Set Up
1. **Clone the repository**
   ```bash
   git clone https://github.com/savize/Tesmo.git
   cd your-repo-name
   ```
2. **Install PHP dependencies**
   ```bash
   composer install
   ```
3. **Install frontend dependencies (if applicable)**
   ```bash
   npm install && npm run dev
   ```  
4. **Set up environment file**
  - Copy `.env.example` to `.env`
  - Update database credentials and other environment variables inside `.env.`
5. **Generate application key**  
   ```bash
   php artisan key:generate
   ```
6. **Run migrations (and seed if needed)**
   ```bash
   php artisan migrate --seed
   ```
7. **Start the local development server**
   ```bash
   php artisan serve
   ```
   The project will be available at: `http://127.0.0.1:8000`
