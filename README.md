# MovieManager

**Movie Manager** - A Laravel5 project created by Rob Howe [rob@robhowe.com](mailto:rob@robhowe.com) in response to a Code Challenge.

## Objective:

Build a website with a database backend for storing a movie collection.  
  Start by getting a ​PHP Laravel​ development environment (try Nitrous.io​, ​c9.io​, ​Koding​).

## App requirements:
  **Simple Movie collection**
  1. Title the app &lt;Your First Name&gt; +” Movie Manager”
  2. App can create, read, update, delete, list one movie collection (your first model)  
    a. Each movie item needs the following:
      1. Title (text, 1min, 50 char max)
      2. Format (dropdown picker, text ) values “VHS”, “DVD”, “Streaming”
      3. Length (time, minutes, >0 and <500) displayed as “x hr yy m”
      4. Release Year (integer, >1800 and < 2100)
      5. Rating (radio button, integer) values default null, 1,2,3,4,5
  3. Make it pretty w BootStrap (or Foundation or anything)
  4. Add a home (at the root \ of the app) splash page with a cool graphic (hyperlink the image to the index page of the movie collection)
  5. Add Header\Footer (menu on the Header, links to Home and Movies)
  6. Make the design fluid and responsive to screen size (to view on phone, tablet, etc).
  7. Make the items list sortable by all columns(title, format, etc)


*****

Note - This is a programming exercise, not an enterprise-level production-ready application.  There is no security or unit tests, and little input validation or documentation included.

*****

## Installation:

This is a simple Laravel project.
To get started, update the usual files with your env's settings:

~~~~
Rob Movie Manager/.env
Rob Movie Manager/config/app.php
~~~~

Pull in the needed files via composer:

~~~~
composer install
~~~~

To create the database needed, from your SQL prompt run commands:

~~~~
SQL> CREATE DATABASE dbname;
SQL> CREATE USER 'dbusername'@'localhost' IDENTIFIED BY 'password';
SQL> GRANT ALL PRIVILEGES ON dbname.* TO 'dbusername'@'localhost';
~~~~

Then create the schema:

~~~~
php artisan migrate:install
php artisan migrate
~~~~

If needed, start a webserver.

****

The latest version of this project can be found running at: [http://moviemanager.robhowe.com](http://moviemanager.robhowe.com)

****

## License

See the included LICENSE.txt file.
All information contained within this project is, and remains the property of [Rob Howe](http://www.robhowe.com/).
