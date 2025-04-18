# 🎓 University Student Registration & Course Enrollment System

A web-based system for managing student registrations and course enrollments, built using **PHP**, **MySQL**, **HTML**, **CSS**, and **JavaScript**.  
Developed as part of the Web Engineering Lab at **Daffodil International University**.

---

## 🚀 Features

- ✅ Student Registration with validation
- 📋 Student List (view all registered students)
- 📚 Course Enrollment form with validation
- 🧾 View Student Enrollment History
- 💡 Responsive and user-friendly UI
- 🔐 Basic error and success messages
- 🇧🇩 Includes Bangladeshi sample student data

---

##  Folder Structure

```
student-system/
├── db.php                    # Database connection
├── index.php                 # Navigation menu
├── add_student.php           # Student registration form
├── student_list.php          # Registered students list
├── enroll_course.php         # Course enrollment form
├── enrollment_history.php    # View enrollment history
├── style.css                 # Modern CSS styling
└── README.md                 # Project documentation
```

---

## 🛠️ Setup Instructions

### 1. Clone the Repository
```bash
git clone https://github.com/yourusername/student-system.git
cd student-system
```

### 2. Set up the MySQL Database

```sql
CREATE DATABASE university;

USE university;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    student_id VARCHAR(20),
    department VARCHAR(100),
    major VARCHAR(100),
    dob DATE,
    address TEXT
);

CREATE TABLE enrollments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id VARCHAR(20) NOT NULL,
    course_code VARCHAR(20) NOT NULL,
    course_title VARCHAR(100),
    semester VARCHAR(20),
    grade VARCHAR(5)
);
```

### 3. Insert Sample Data
Use the sample SQL provided for Bangladeshi students and course enrollments.

### 4. Run the App
- Start Apache (e.g., through XAMPP)
- Place the project folder inside `htdocs`
- Visit: [http://localhost/student-system/add_student.php](http://localhost/student-system/add_student.php)

---

##  UI Pages

- 🔗 Add Student → `/add_student.php`  
- 🔗 Student List → `/student_list.php`  
- 🔗 Enroll in Course → `/enroll_course.php`  
- 🔗 Enrollment History → `/enrollment_history.php`

---

##  Technologies Used

- PHP  
- MySQL  
- HTML5  
- CSS3 (with custom responsive styling)  
- JavaScript (basic form validation)

---

##  Author

**Your Name**  
Md Shefat Al Mahud, Daffodil International University  
 youremail@example.com

---
