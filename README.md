# Alumnae_Information_Manager_System
Alumnae Information Management System is developed to bridge the gap between alumnae's and the institute
.This is a completed working project developed using html,css,php and javascript.This project will have a home page where options will be there to navigate to different pages say
   * Login page
      * Alumnae login - Allows alumnae's to login and update personal information(No alumnae's will be there initially add any alumnae using admin page)
      * Staff login - Allows staffs to login and post events or send bulk mails to the alumnae's(Check for staff information in admin page, two staffs will be there, can add 
        somemore using admin page)
      * Admin login - All the admin responsibilities can be done eg. can add/delete/modify any alumnae/staff informations, Contacted information is visible and can take 
        necessary action
           * Admin credentials
           * User id - ADMIN
           * Password - ADMIN
   * Event page - Where the posted events of college will appear
   * Contact us page - Where the user can contact managent regarding some queries
   * Gallery page - where the various images of the college will be presented


### Steps to download and run this project
1. Download and install XAMPP server in your local system
2. Inside the XAMPP source file open htdocs folder
3. Every php file needs to be placed inside htdocs folder to run
4. Download and extract this alumnae project inside htdocs folder
5. Open XAMPP application from start
6. Start Apache server to send information in the form of forms/webpages and MYSQL to connect to the database
7. In XAMPP-->MYSQL click on Admin to setup database and tables
8. Localhost phpmyadmin will open in web browser, create a new database "phpdatabases" to include all the tables inside database
9. NOTE:Give database name as exactly as i provided else no tables will be connected
10. Inside XAMPP-->htdocs-->Inside the folder we have the project-->sql databases-->phpdatabases(2)
11. This file needs to be imported in phpmyadmin, there import option to simply import this file
12. The sql file contains the sql queries to setup tables and table structure
13. Required setup is done,Run the index.php in browser
