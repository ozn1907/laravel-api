# Laravel API Documentation

## Project Overview

This Laravel API project serves as a practical exploration of API development in Laravel, showcasing essential features and best practices. It focuses on managing teams.

## Getting Started

### Prerequisites

- [PHP](https://www.php.net/) (>= 7.4)
- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/) (>= 8.x)
- [MySQL](https://www.mysql.com/)

### Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/ozn1907/laravel-api
    ```

2. **Navigate to the project directory:**

    ```bash
    cd laravel-api
    ```

3. **Install dependencies:**

    ```bash
    composer install
    ```

4. **Configure the environment:**

    ```bash
    cp .env.example .env
    ```

    Update the `.env` file with your database credentials and other necessary settings.

5. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

6. **Run migrations and seed the database:**

    ```bash
    php artisan migrate --seed
    ```

7. **Start the development server:**

    ```bash
    php artisan serve
    ```

## Team Operations

The API includes operations to manage teams. Here are the endpoints:

- **Create a team:**
    ```markdown
    - **Endpoint:** `/api/teams`
    - **Method:** `POST`
    - **Description:** Create a new team.
    - **Parameters:**
        - `name` (string, required): The name of the team.
        - `city` (string, required): The city of the team.
        - `foundation_year` (string, required): The foundation year of the team.
    - **Response:**
    ```
    ```json
        {
          "message": "Team created successfully",
          "data": {
            "id": 1,
            "name": "New Team",
            "city": "New City",
            "foundation_year": "New Foundation Year"
          }
        } 
    ``` 
- **Read teams:**

    ```markdown
    - **Endpoint:** `/api/teams`
    - **Method:** `GET`
    - **Description:** Retrieve a list of all teams.
    - **Parameters:**
        - None
    - **Response:**
    ```
    ```json
        {
          "message": "Success",
          "data": [
            {
              "id": 1,
              "name": "Team 1",
              "city": "City 1",
              "foundation_year": "Foundation Year 1"
            },
            // ... other teams
          ]
        }
    ```

- **Update a team:**
    
    ```markdown
    - **Endpoint:** `/api/teams/{id}`
    - **Method:** `PUT`
    - **Description:** Update an existing team.
    - **Parameters:**
        - `name` (string, required): The updated name of the team.
        - `city` (string, required): The updated city of the team.
        - `foundation_year` (string, required): The updated foundation year of the team.
    - **Response:**
    ```
    ```json
        {
          "message": "Team updated successfully",
          "data": {
            "id": 1,
            "name": "Updated Team",
            "city": "Updated City",
            "foundation_year": "Updated Foundation Year"
          }
        }
    ```


- **Delete a team:**

    ```markdown
    - **Endpoint:** `/api/teams/{id}`
    - **Method:** `DELETE`
    - **Description:** Delete a team.
    - **Parameters:**
        - None
    - **Response:**
    ``` 
    ```json
        {
          "message": "Team deleted successfully",
          "data": null
        }
    ```

## License

This project is licensed under the **MIT License** - see the **[LICENSE](LICENSE)** file for details.

---

**Copyright (c) 2024 - All rights reserved to [Ozan](https://github.com/ozn1907).**
