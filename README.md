# Laravel API Documentation

## Project Overview

This Laravel API project serves as a practical exploration of API development in Laravel, showcasing essential features and best practices.

## Getting Started

### Prerequisites

- [PHP](https://www.php.net/) (>= 7.4)
- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/) (>= 8.x)
- [MySQL](https://www.mysql.com/) 
### Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/ozn1907/laravel-api
    ```

2. Navigate to the project directory:

    ```bash
    cd laravel-api
    ```

3. Install dependencies:

    ```bash
    composer install
    ```

4. Configure the environment:

    ```bash
    cp .env.example .env
    ```

    Update the `.env` file with your database credentials and other necessary settings.

5. Generate application key:

    ```bash
    php artisan key:generate
    ```

6. Run migrations and seed the database:

    ```bash
    php artisan migrate --seed
    ```

7. Start the development server:

    ```bash
    php artisan serve
    ```

## License


<p>Copyright (c) 2024 - All rights reserved to
  <a href="https://github.com/ozn1907">Ozan</a>
</p>


This project is licensed under the **MIT License** - see the **[LICENSE](LICENSE)** file for details.
