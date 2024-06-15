Elissa Travel
Elissa Travel is a comprehensive travel website built with Symfony 5.4, offering a range of services including flight reservations, event bookings, hotel reservations, and organized voyages. Our aim is to make travel planning seamless and enjoyable. The website features a mailing system, admin dashboard with statistics, and an agenda.


Table of Contents

Installation
Usage
Features
Screenshots
Contributing
License
Contact
Installation

To get a local copy up and running, follow these simple steps:

Prerequisites
PHP 7.4 or higher
Composer
XAMPP or any compatible web server environment
A modern web browser (e.g., Chrome, Firefox)
Steps
Clone the repository

sh
 
git clone  https://github.com/chahe-dridi/elissa_travel
Navigate to the project directory

sh
 
cd elissa-travel
Install PHP dependencies

sh
 
composer install
Set up environment variables

Copy the .env file to .env.local and configure your database connection and other environment variables as needed.
sh
 
cp .env .env.local
Create the database

sh
 
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force
Run XAMPP and configure the virtual host

Ensure Apache and MySQL are running in XAMPP.
Configure a virtual host in XAMPP to point to your project directory.
Start the development server

sh
 
symfony serve
Or, if using PHP's built-in server:

sh
 
php -S 127.0.0.1:8000 -t public
Usage
After starting the development server, you can access the website at http://127.0.0.1:8000.

Flights Reservation
Search and book flights from a wide range of airlines.
View flight details and prices.
Manage bookings.
Events Booking
Browse and book tickets for various events.
View event details, dates, and prices.
Hotel Reservation
Search for hotels in your desired location.
View hotel details, availability, and prices.
Book rooms and manage reservations.
Organized Voyages
Explore and book organized travel packages.
View itinerary details and prices.
Admin Dashboard
View statistics related to site usage and bookings.
Manage user accounts and bookings.
Access an agenda to keep track of upcoming events and tasks.
Mailing System
Send booking confirmations and notifications to users.
Manage email templates with Twig.
Features
User Authentication: Secure sign-up and login functionality.
Responsive Design: Fully responsive and mobile-friendly design using HTML, CSS, and JS.
Payment Integration: Secure payment gateway for booking services.
Interactive UI: User-friendly and intuitive interface.
Search Filters: Advanced search filters for flights, hotels, and events.
Admin Dashboard: Detailed statistics and agenda for administrative tasks.
Mailing System: Automated emails for booking confirmations and notifications.
Screenshots
![image](https://github.com/chahe-dridi/elissa_travel/assets/91032735/0affb899-03b9-4537-9e69-4edc793e60d3)
![image](https://github.com/chahe-dridi/elissa_travel/assets/91032735/615cd584-6abb-474d-b3c4-836be315a3da)
![image](https://github.com/chahe-dridi/elissa_travel/assets/91032735/9c233ab6-81bb-4a6e-8c48-d37b233aca59)
![image](https://github.com/chahe-dridi/elissa_travel/assets/91032735/b4e79d90-561b-433e-b656-1c8b9ae71c6f)
![image](https://github.com/chahe-dridi/elissa_travel/assets/91032735/de4138f8-846e-4841-80c1-36c7550c63d3)
![image](https://github.com/chahe-dridi/elissa_travel/assets/91032735/cd68d423-1fa8-40e8-85d3-1bff99ddb1e4)

 

Contributing
Contributions are what make the open-source community such an amazing place to be, learn, inspire, and create. Any contributions you make are greatly appreciated.

Fork the Project
Create your Feature Branch (git checkout -b feature/AmazingFeature)
Commit your Changes (git commit -m 'Add some AmazingFeature')
Push to the Branch (git push origin feature/AmazingFeature)
Open a Pull Request
License
Distributed under the MIT License. See LICENSE for more information.

Contact
Dridi Chaher - Chaher.dridi@ieee.org

Project Link:  https://github.com/chahe-dridi/elissa_travel

