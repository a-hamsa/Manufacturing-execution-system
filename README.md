# Manufacturing Execution System (MES)

## Overview

The Manufacturing Execution System (MES) is a comprehensive solution designed to manage and optimize manufacturing operations. This system provides functionalities to manage schedules, operators, machines, production logs, products, shifts, and work orders.

## Features

- **Operators Management**: Manage operators and their shifts.
- **Machines Management**: Track and manage machines used in production.
- **Production Logs**: Record and review production activities.
- **Products Management**: Manage product details and inventory.
- **Shifts Management**: Define and manage shifts.
- **Work Orders Management**: Track and manage work orders throughout the production process.

## Technologies Used

- **CodeIgniter 4**: PHP framework used for the backend development.
- **MySQL**: Database management system to store data.
- **HTML/CSS**: For the frontend and layout.

## Installation

### Prerequisites

- PHP 7.4 or later
- Composer
- MySQL or MariaDB
- Web Server (e.g., Apache, Nginx)

### Steps

1. **Clone the Repository**

    ```bash
    git clone https://github.com/yourusername/mes-project.git
    cd mes-project
    ```

2. **Install Dependencies**

    ```bash
    composer install
    ```

3. **Set Up the Database**

    - Create a new database in MySQL.
    - Update the database configuration in `app/Config/Database.php` with your database details.

4. **Run Migrations**

    ```bash
    php spark migrate
    ```

5. **Start the Development Server**

    ```bash
    php spark serve
    ```

    Visit `http://localhost:8080` in your browser to access the application.

## Configuration

- **Environment Variables**: Adjust the environment variables in the `.env` file (create one based on `.env.example` if it doesn’t exist).
- **Database Configuration**: Modify `app/Config/Database.php` to match your database setup.

## Usage

1. **Access the Application**

    Navigate to the base URL to access the application. You can view and manage:

    - **Operators**: `/operators`
    - **Machines**: `/machines`
    - **Production Logs**: `/production_logs`
    - **Products**: `/products`
    - **Shifts**: `/shifts`
    - **Work Orders**: `/work_orders`

2. **CRUD Operations**

    - Use the provided links to add, view, update, or delete entries for each entity.


---

Thank you for using the Manufacturing Execution System (MES)! We hope this system helps streamline your manufacturing operations.

