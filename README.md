# Black Box Task 1 - PHP & MySQL Development Environment Setup

## Project Overview
This is Task 1 of the internship project focusing on setting up a local development environment for PHP and MySQL CRUD operations.

## Features
- ✅ PHP & MySQL development environment using XAMPP
- ✅ Local server configuration (Apache + MySQL)
- ✅ Git version control setup
- ✅ GitHub repository integration
- ✅ Ready for CRUD development

## Requirements
- XAMPP (Apache + MySQL)
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Git
- Web browser

## Installation & Setup

### 1. XAMPP Installation
1. Download and install XAMPP from https://www.apachefriends.org/
2. Start Apache and MySQL services from XAMPP Control Panel

### 2. Project Setup
1. Clone this repository to `C:\xampp\htdocs\blackbox_task1`
2. Access the project at: http://localhost/blackbox_task1/

### 3. Database Setup
The application will automatically create the required database and tables on first run.

## File Structure
```
blackbox_task1/
├── index.php          # Main application entry point
├── README.md          # Project documentation
├── config/
│   └── database.php   # Database configuration
├── includes/
│   ├── header.php     # Common header
│   └── footer.php     # Common footer
├── create.php         # Add new user
├── read.php           # View users
├── update.php         # Edit user
├── delete.php         # Delete user
└── assets/
    └── css/
        └── style.css  # Custom styles
```

## Usage
1. Start XAMPP Apache and MySQL services
2. Open browser and navigate to http://localhost/blackbox_task1/
3. Begin CRUD operations

## Git Commands
```bash
# Initialize repository
git init

# Add all files
git add .

# Commit changes
git commit -m "Initial commit - Task 1 setup"

# Add remote repository
git remote add origin https://github.com/[username]/blackbox_task1.git

# Push to GitHub
git push -u origin main
```

## Next Tasks
- [ ] Task 2: CRUD Operations Implementation
- [ ] Task 3: User Authentication System
- [ ] Task 4: Advanced Features
- [ ] Task 5: Testing & Documentation

## Support
For any issues or questions, please refer to the internship documentation or contact your supervisor.

## License
This project is part of the internship program and is for educational purposes only.
