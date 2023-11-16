# Backend-PHP-Developer---Take-Home-Assignment

Employee Management System (EMS) is a PHP-based application that provides functionality for managing employees and departments. The system allows you to add, edit, delete, and view employee details. It also includes functionalities for adding, editing, deleting, and viewing department details.

## Requirements

1. PHP version 7.3 or higher
2. MySQL or any other DBMS that can work with CodeIgniter 4
3. CodeIgniter 4.0.0 or higher

## Installation

1. Download the source code of the project.
2. Extract the source code into a folder on your server.
3. Configure the database settings in the `.env` file located in the root folder of the project.
4. Run the database migration script by navigating to `your-project-folder/public/migrate`.

## Features

### Departments

1. Get a list of all departments: Send a GET request to `your-project-folder/public/api/departments`.
2. Get a single department by its ID: Send a GET request to `your-project-folder/public/api/departments/{id}`.
3. Create a new department: Send a POST request to `your-project-folder/public/api/departments` with the required data.
4. Update a department: Send a PUT request to `your-project-folder/public/api/departments/{id}` with the updated data.
5. Delete a department: Send a DELETE request to `your-project-folder/public/api/departments/{id}`.

### Employees

1. Get a list of all employees: Send a GET request to `your-project-folder/public/api/employees`.
2. Get a single employee by its ID: Send a GET request to `your-project-folder/public/api/employees/{id}`.
3. Create a new employee: Send a POST request to `your-project-folder/public/api/employees` with the required data.
4. Update an employee: Send a PUT request
