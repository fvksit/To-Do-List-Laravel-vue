# Task Management Application

## Table of Contents

1. [Introduction](#introduction)
2. [Running the Application](#running-the-application)
    - [Backend (Laravel)](#backend-laravel)
    - [Frontend (Vue.js)](#frontend-vuejs)
3. [API Documentation](#api-documentation)
    - [Postman Collection](#postman-collection)

---

## Introduction

This project is a Task Management Application that allows users to create, edit, assign, and manage tasks. It consists of a **backend** developed using **Laravel** and a **frontend** built using **Vue.js**.

---

## Running the Application

Follow the steps below to run both the **backend (Laravel)** and **frontend (Vue.js)** of the application.

### Backend (Laravel)

1. **Clone the Repository** (if not already done):

    ```bash
    git clone <repository-url>
    cd <project-directory>
    ```

2. **Install Dependencies**:

    - Install PHP dependencies via Composer:

    ```bash
    composer install
    ```

3. **Set up Environment**:

    - Copy the example environment file:

    ```bash
    cp .env.example .env
    ```

    - Generate the application key:

    ```bash
    php artisan key:generate
    ```

4. **Database Migration**:

    - Run the database migrations to set up the required tables:

    ```bash
    php artisan migrate
    ```

5. **Start the Laravel Server**:

    - Run the backend server:

    ```bash
    php artisan serve
    ```

    Now, the Laravel API will be available at `http://localhost:8000`.

### Frontend (Vue.js)

1. **Install Dependencies**:

    - Install Node.js dependencies using **npm**:

    ```bash
    npm install
    ```

2. **Run the Development Server**:

    - Start the frontend server using **Vite**:

    ```bash
    npm run dev
    ```

    The Vue.js application will be available at `http://localhost:3000`.

### Verifying the Application

-   **Backend**: Ensure the API is working by testing it in Postman or directly using the API in the browser (`http://localhost:8000`).
-   **Frontend**: Ensure the Vue.js application is running correctly at `http://localhost:3000`.

---

---

### Penjelasan:

1. **Running the Application**:

    - Memberikan instruksi langkah demi langkah untuk menjalankan aplikasi backend (Laravel) dan frontend (Vue.js).

2. **API Documentation (Postman Collection)**:
    - Menyediakan instruksi tentang bagaimana menggunakan **Postman** untuk menguji dan mendokumentasikan API. Ini mencakup langkah-langkah untuk **mengimpor koleksi Postman** dan **menggunakan API**.

Dengan menggunakan **Postman Collection** sebagai dokumentasi API, Anda mempermudah pengembang lain untuk melakukan pengujian terhadap API dan memahami bagaimana API bekerja.
