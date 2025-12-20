
# Complaint Management System 📝

A web-based Complaint Management System developed using **PHP and MySQL** that allows users to register complaints online and track their status efficiently. The system includes secure authentication, complaint tracking, and an admin panel for management.

---

## 🚀 Features

### User
- User Registration & Login
- File a Complaint
- View Complaint Status
- Secure Session Management
- Modern and Responsive UI

### Admin
- View All Complaints
- Monitor Complaint Status
- Centralized Complaint Management

---

## 🛠️ Technologies Used

- **Frontend:** HTML5, CSS3 (Pure CSS – No external libraries)
- **Backend:** PHP
- **Database:** MySQL
- **Server:** Apache (XAMPP)
- **Version Control:** Git & GitHub

---

## 📂 Project Structure

complaint-management-system/ │ 
├── admin/ │   
     └── view_complaints.php │ 
├── auth/ │   
      ├── login.php │   
      ├── register.php │   
      └── logout.php │ 
├── user/ │   
     ├── dashboard.php │   
     ├── add_complaint.php │   
     └── my_complaints.php │ 
├── config/ │   
     └── db.php │ 
├── screenshots/ │   
     ├── login.png │   
     └── dashboard.png │ 
├── database.sql 
├── index.php 
├── style.css 
└── README.md

---

## ⚙️ Installation & Setup

1. Install **XAMPP**
2. Copy the project folder to:

htdocs/complaint-management-system

3. Start **Apache** and **MySQL**
4. Import `database.sql` into phpMyAdmin
5. Open browser and visit:

http://localhost/complaint-management-system

---



## 🔐 Security Features
- Password hashing
- Session-based authentication
- Protected routes

---

## 📌 Future Enhancements
- Complaint status update by admin
- Email notifications
- Role-based access control
- Analytics dashboard

---

## 👨‍💻 Author
Developed by [Kartik ahir]

---

## 📄 License
This project is open-source and available for educational purposes.