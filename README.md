# 🏨 Hotel Booking System (Final Year Project)

> Archive Project – Final Year Project

A hotel reservation management system developed as my final year project.

This project was built before I started using modern frontend frameworks such as React. It demonstrates my early full-stack development experience using PHP, MySQL, JavaScript and Arduino-based RFID integration.

Although the implementation reflects my programming style at that time, I decided to keep this project public as part of my learning journey and to show how my software development skills have evolved over time.

## 🌐 Live Demo

🔗 Demo: https://hotel-booking-system-wv6m.onrender.com

📦 Source Code: https://github.com/jillchiu/hotel_booking_system/

## 📷 Screenshots

![index](https://i.imgur.com/dzDq2Ko.jpeg)

# ✨ Features

### Customer

* User registration and login
* Browse available hotel rooms
* Search room availability
* Book hotel rooms
* View booking history
* Cancel reservations

### Administrator

* Manage customer accounts
* Manage hotel rooms
* Manage bookings
* Update room availability
* Reservation administration

### RFID Prototype

This project also includes a prototype RFID room access system using Arduino.

The RFID module demonstrates how hotel key cards could be used for room authentication as part of an integrated hotel management solution.

# 🛠 Tech Stack

### Backend

* PHP
* MySQL
* PHP Session

### Frontend

* HTML
* CSS
* JavaScript
* Bootstrap

### Hardware Prototype

* Arduino
* RFID Module

# 📚 Project Structure

```
Hotel Booking System
│
├── customer/
├── admin/
├── booking/
├── room/
├── login/
├── register/
├── database/
├── css/
├── js/
├── images/
└── Arduino RFID Prototype
```

# 🗄 Database

The system stores and manages:

* Customers
* Rooms
* Reservations
* Room Availability
* Booking Records

Relational database design was used to maintain data consistency between customers, reservations and hotel rooms.

# 🔄 Booking Workflow

```
Customer Login
        │
        ▼
Search Available Rooms
        │
        ▼
Select Room
        │
        ▼
Create Reservation
        │
        ▼
Update Database
        │
        ▼
Booking Completed
```

# 🔐 RFID Demonstration

One of the unique parts of this project is the Arduino RFID prototype.

The prototype demonstrates the possibility of replacing traditional hotel room keys with RFID cards.

Current implementation:

* RFID card authentication
* Door access simulation
* Card ID verification

Future improvements proposed in the original project include:

* Synchronizing RFID data with the hotel database
* Logging room access history
* Real-time communication between the booking system and RFID devices

# 💡 What I Learned

This project gave me practical experience with:

* Full-stack web development
* PHP session management
* CRUD operations
* Relational database design
* Form validation
* User authentication
* Reservation workflow design
* Hardware and software integration
* Project documentation

# ⚠ Limitations

This project was developed as a university final year project.

Compared with modern production systems, several areas could be improved:

* No MVC architecture
* Limited error handling
* Repeated business logic
* Minimal code abstraction
* No REST API
* No frontend framework
* Limited security validation
* RFID prototype is not fully integrated with the web application

These limitations are intentionally preserved because they reflect my programming experience at that stage.

# 🚀 How My Development Has Evolved

After completing this project, I continued learning modern frontend development and software architecture.

Recent portfolio projects use technologies such as:

* React
* TypeScript
* Context API
* Custom Hooks
* REST API
* Component-based architecture
* Reusable modules
* Modern state management

This repository represents the starting point of that learning journey.

# 📖 Notes

This repository is archived as part of my portfolio.

Rather than rewriting the entire application with modern technologies, I chose to preserve the original implementation to demonstrate my progression from traditional PHP development to modern React and TypeScript applications.
