# 🔐 PHP Login & Registration System

A complete **full-stack authentication system** built using **HTML, CSS, JavaScript, PHP, and MySQL**.
This project demonstrates how to create a secure and interactive user system with **registration, login, session management, and dashboard access**.


## 🚀 Features

*  User Registration System
*  Secure Login Authentication
*  Password Hashing (Security Best Practice)
*  Session Management (Login State)
*  Protected Dashboard Page
*  Logout Functionality
*  Frontend Validation (JavaScript)
*  Backend Validation (PHP)
*  Responsive and Clean UI Design


## 🧠 Technologies Used

* **Frontend:**

  * HTML5
  * CSS3
  * JavaScript

* **Backend:**

  * PHP

* **Database:**

  * MySQL

## 📁 Project Structure

```
/project
│── index.php          # Login Page
│── register.php       # Registration Page
│── dashboard.php      # User Dashboard
│── logout.php         # Logout Script
│── config.php         # Database Connection
│── style.css          # Styling
│── script.js          # Validation & Interactivity
```


## 🗄️ Database Setup

1. Create a database:

```sql
CREATE DATABASE user_system;
```

2. Use the database:

```sql
USE user_system;
```

3. Create the users table:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    department VARCHAR(100),
    gender VARCHAR(10),
    hobbies TEXT,
    others TEXT,
    phone VARCHAR(20) UNIQUE,
    password VARCHAR(255)
);
```


## ⚙️ Installation & Setup

1. Install **XAMPP / WAMP / MAMP**
2. Move project folder into:

```
htdocs/
```

3. Start:

* Apache 
* MySQL 

4. Open in browser:

```
http://localhost/project/index.php
```


## 🔐 Authentication Flow

1. User registers via `register.php`
2. Data is stored securely in MySQL
3. Password is encrypted using `password_hash()`
4. User logs in via `index.php`
5. Session is created (`$_SESSION`)
6. User is redirected to `dashboard.php`
7. Logout destroys session


## 🛡️ Security Features

* Password hashing (`password_hash`, `password_verify`)
* Prepared statements (prevents SQL injection)
* Session protection
* Input validation (Frontend + Backend)


## 🎨 UI Highlights

* Clean and modern layout
* Interactive form validation
* Error handling messages
* Responsive design structure


## 📌 Future Improvements

* 🔥 Admin panel (view/manage users)
* 📧 Email verification system
* 🔑 Forgot password feature
* 🌙 Dark mode UI
* 📱 Fully responsive mobile design
* ⚛️ React frontend integration


## 👨‍💻 Author

**Kebi G.**


## 📄 License

This project is open-source and available for learning and educational purposes.


