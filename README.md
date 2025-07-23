# 🎬 StreamFlix - Movie Streaming Platform

StreamFlix is a simple movie streaming web application that allows users to register, log in, and browse a collection of movies. Built with PHP, MySQL, and styled using modern CSS, the project is ideal for learning full-stack development concepts.

## 📂 Project Structure

├── config.php # Database connection configuration
├── StreamFlix.php # Main PHP file handling front-end and back-end logic
├── styles.css # Custom CSS for styling the application
├── Users.sql # SQL script to create the 'users' table and database
├── README.md # Project documentation

markdown
Copy
Edit

## 🚀 Features

- Responsive and modern UI using CSS
- User registration and login functionality
- Dynamic movie display section
- Navbar and footer design inspired by Netflix
- Dark mode styling with hover effects

## 🛠️ Technologies Used

- **Frontend**: HTML, CSS (custom + Bootstrap)
- **Backend**: PHP
- **Database**: MySQL

## 🧰 Setup Instructions

1. **Clone the Repository**
   ```bash
   git clone https://github.com/your-username/streamflix.git
   cd streamflix
Set Up the Database

Open your MySQL interface (e.g., phpMyAdmin or MySQL CLI)

Run the Users.sql script:

sql
Copy
Edit
SOURCE path/to/Users.sql;
Configure the Database Connection

Open config.php and update the database credentials:

php
Copy
Edit
$dbHost = 'localhost';
$dbName = 'moviestreaming';
$dbUser = 'your_mysql_username';
$dbPass = 'your_mysql_password';
Run the Application

Place the files in your local server directory (e.g., htdocs for XAMPP)

Start Apache and MySQL

Visit http://localhost/streamflix/StreamFlix.php in your browser
