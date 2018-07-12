
# Zeotrope
A web database of Movies and TV Shows in many languages where you can write reviews, rate, and view lists of top movies and tv shows.

#### Front End
HTML, CSS, Bootstrap
#### Back End
PHP, MySQL

## Instructions
### 1. Installing WAMP
Install WAMP (Windows Apache MySQL PHP) Server http://www.wampserver.com/en/
Make sure the WAMP icon is in the notification area of windows, and that it is green and ready to use.

### 2. Setting up files
Navigate to the www directory in the wamp64 folder. On installation, the www directory will automatically be created. It's usually present at "C:\wamp\www ". It may have a different path if you choose to install WAMP elsewhere.This can be reached by clicking on the WAMP icon and then on www directory. Copy paste all the files from the Zoetrope git directory into the www directory, overwriting existing files. All the PHP files should be directly in the www folder.

### 3. Setting the password
Click on the WAMP icon and click on 'phpMyAdmin' and login. Username by default is 'root' and there is no password.
Change the password for the root to 'password'.

### 4. Setting up the initial database tables 
Navigate to 'http://localhost/Database%20Entry%20Ready/' and click on 'importall.php'. This will run a script to set up the inital databse.
To verify this, click on the WAMP icon, and then MySQL. Login using 'root' and 'password'. Run 'use zoetrope;' and 'show tables;' and make sure all 13 tables have been created.

### 4. To use the website
Click on the WAMP icon and then on 'Localhost'.
You can create new users by clicking on Sign Up.
Use your entered email id and password to login.


## Features

1. Top 10 Lists of Movies and TV Shows by language.
2. Watch Lists
3. Rate and Review Movies
4. Now Playing, Coming Soon and Released Movies
