# Blood-Bank-Management-System
# Blood Bank Management System

## Overview
The **Blood Bank Management System** is a web application designed to streamline the process of blood donation and management. This system facilitates communication between blood banks and users willing to donate blood. It features two user roles:

1. **Blood Bank Manager**: Manages blood inventory, donor records, and requests.
2. **User (Donor)**: Registers, checks eligibility, and schedules blood donations.

---

## Features
### For Blood Bank Manager:
- Add, update, and view blood inventory.
- Manage donor records.
- Approve or reject donation requests.
- Generate reports on blood stock.

### For Donors:
- User registration and login.
- View blood donation guidelines and eligibility criteria.
- Submit donation requests and schedule appointments.
- Track donation history.

---

## Technologies Used
- **Frontend**: HTML, CSS, JavaScript.
- **Backend**: PHP.
- **Database**: MySQL.
- **Server**: Hosted locally on XAMPP.
- **Authentication**: Session-based authentication in PHP.

---

## Installation
1. Clone the repository:
    ```bash
    git clone https://github.com/your-username/blood-bank-management-system.git
    ```
2. Copy the project folder to the `htdocs` directory in your XAMPP installation:
    ```bash
    cp -r blood-bank-management-system /path-to-xampp/htdocs/
    ```
3. Start the XAMPP Control Panel and ensure that Apache and MySQL are running.
4. Set up the database:
    - Open [phpMyAdmin](http://localhost/phpmyadmin/).
    - Create a new database (e.g., `blood_bank`).
    - Import the SQL file provided in the `database` folder of the project.
5. Configure the database connection in the `config.php` file:
    ```php
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blood_bank";
    ?>
    ```
6. Access the project in your browser:
    ```
    http://localhost/blood-bank-management-system/
    ```

---

## Usage
1. **Register** as a blood bank manager or a donor.
2. Log in to access the respective dashboard.
3. Blood Bank Managers can manage inventory and donor details.
4. Donors can check their eligibility, schedule donations, and view history.

---

## Folder Structure
```plaintext
blood-bank-management-system/
├── assets/                # Static files (CSS, JavaScript, images)
├── config/                # Configuration files (e.g., database connection)
├── database/              # SQL scripts for setting up the database
├── includes/              # Reusable PHP components
├── manager/               # Manager-specific pages
├── donor/                 # Donor-specific pages
├── index.php              # Entry point for the application
├── README.md              # Project documentation
```

---

## Contributing
Contributions are welcome! Please follow these steps:
1. Fork the repository.
2. Create a new branch for your feature:
    ```bash
    git checkout -b feature-name
    ```
3. Commit your changes:
    ```bash
    git commit -m "Add new feature"
    ```
4. Push to your branch:
    ```bash
    git push origin feature-name
    ```
5. Create a pull request.

---

## License
This project is licensed under the MIT License. See the `LICENSE` file for details.

---

## Contact
For questions or suggestions, feel free to contact the project maintainer:
- Email: mahantayush08@gmail.com

---

### Acknowledgments
Special thanks to all contributors and the open-source community for their support and resources!
