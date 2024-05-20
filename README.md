# 59th DGCA Website Project
![DGCA Database Model](public/img/readme/dgca-banner.jpg)
## Overview

The 59th DGCA Website Projects is a strategic initiative aimed at optimising the digital infrastructure for the Directorate General of Civil Aviation (DGCA) Conference, exclusively serving nations within the Asia-Pacific Region (APAC). This web-based platform streamlines the submission of electronic files and programs, fostering seamless preparations ahead of the conference. It offers a user-friendly online registration system for APAC delegates and serves as a dynamic reservation hub for side-meetings, promoting efficient collaboration and diplomatic discussions on business matters.


## Project Features
- Optimized registration system for international delegates
- Real-time meeting room reservation
- File documentation and management
- Streamlined document submission and user experience
- Access code authentication tokens
- RESTful API authentication

# Feature Documentation Links:
### 🔗 [Access Code](documentation/accesscode.md)
### 🔗 [Universal Access Roles](documentation/access_rolesd.md)
### 🔗 [Troubleshooting Guides](documentation/troubleshooting_guides.md)



## Getting Started

### Prerequisites
Before you begin, ensure you have met the following requirements:

- PHP (>=9.x)
- Composer (>=2.6.x)
- Node.js and npm (>=10.x)


### Installations
1. **Composer Dependencies**
```
composer install
```
2. **NodeJS Dependencies**
```
npm install
```
3. **Update or Create Database**
```
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```
4. **Generate Key**
```
php artisan key:generate
```
5. **Migrate Database**
```
php artisan migrate
```
6. **Set Storage Link**
```
php artisan storage:link
```
7. **Compile Frontend Asset**
```
npm run dev
```
8. **Run Laravel Project**
```
php artisan serve
```

## Database Model
This model contains the table relationships that are used within the project architecture. Each relationship has its foreign keys that associates to their designated values in the database.
![DGCA Database Model](public/img/readme/dgcaDB-model.png)



