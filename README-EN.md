# api-php-youtube
Php API youtube search by term

## Installation

### To use the API locally, just follow these php documentation steps:

### For Windows

- Go to http://php.net/downloads.php and download PHP for Windows.
- You can download the version you want as long as it is greater than 7 (give preference to Thread Safety).
- I suggest downloading version 7.3 or higher.
- After downloading, unzip the .zip file to your computer's main partition (usually C :) and rename the folder to simply php
- Install Microsoft Visual C ++ (PHP needs it to run on the machine)
- For PHP to work correctly, we need to enable its default settings.
- Inside the unzipped folder in C :, we have several files, the PHP executable (php.exe) and two configuration files: php.ini-development and php.ini-production.
- rename the php.ini-development file to php.ini only.
- The PHP executable will always load the settings from the php.ini file.
- We have to configure PHP to work at any time on the terminal.
- Open Control Panel, go to System, select the Advanced tab, then click Environment Variables at the bottom of the window. In the System Variables section, select Path, now click Edit, under Variable Value, go to the end of the text field, now we will put the path where our PHP is, add one before; (semicolon) to end the previous paths and put c: \ php, then it looks like this:….; c: \ php. Confirm everything and PHP is set up.
- Now we have to configure the hosts file to point the localhost name to 127.0.0.1.
- Open the start menu and select your text editor with the right mouse button and click Run as administrator. From the Open menu and follow the path C: \ Windows \ System32 \ drivers \ etc. Open the hosts file, if it does not appear, select All files to be shown in the window.
- Now check if there is line 127.0.0.1 localhost, if there is ready, otherwise add it to the end of the file, save and close the program.

https://www.php.net/manual/en_install/install.windows.php

### For Linux

- Prerequisites
- An updated instance of Ubuntu 18.04 server.
- A sudo user
- Update Ubuntu
- sudo apt-get update -y
- sudo apt-get upgrade -y
- Install PHP 7.2
- apt-cache pkgnames | grep php7.2
- sudo apt-get install php -y
- sudo apt-get install php- {bcmath, bz2, intl, gd, mbstring, mysql, zip, fpm} -y
- Confirm PHP version:
- php -v
- Official php Documentation:
- I do not recommend using the official php documentation, it is too late.
https://www.php.net/manual/en_US/install.unix.debian.php


## To run the project.

### To start the project just use the built-in php server

- php -S localhost: 8080

## End Points from api

### Sample Parameters in the api

- Api has a parameter to limit the results, if this parameter is not informed or is different from an integer it will return 10 results.
- http: // localhost: 8080 /? term = seutermo & limit = 3
- Will search the term your term with a limit of 3 results.

- http: // localhost: 8080 /? term = seutermo & limit = any
- Will search the term your term with a limit of 10 results.

- http: // localhost: 8080 /? term = seutermo & limit =
- Will search the term your term with a limit of 10 results.

- http: // localhost: 8080 /? term = tseutermo
- Will search the term your term with a limit of 10 results.

### Comments

- The Youtube v3 api has a daily limit of cosultas.