### Assessment Details:

> ##### Popular PHP Repositories on GitHub Using PHP and MySQL, complete the following:
> 
>  1. Use the GitHub API to retrieve the most starred public PHP projects. Store the list of repositories in a MySQL table. The table must contain the repository ID, name, URL, created date, last push date, description, and number of stars. This process should also be able to update existing project details.
> 
>  2. Using the data in the table created in step 1, create an interface that displays a list of the GitHub repositories and allows the user to click through to view details on each one. Be sure to include all of the fields in step 1 – displayed in either the list or detailed view.
> 
>  3. Create a README file with a description of your architecture and notes on installation of your application. You are free to use any PHP, JavaScript, or CSS frameworks as you see fit.

### Project Architecture:

##### Requirements:
    * Apache or NGINX web server
    * PHP 7.0 or newer
    * MySQL
    * Composer

##### Technologies Used:
    * PHP
    * MySQL
    * Composer
    * Laravel

### Installation:

1. Clone the VICTR-assessment Github repo to your local machine.

    * `git clone https://github.com/justinhamlett/VICTR-assessment.git VICTR-assessment`
    
2. In terminal, navigate to the directory, `VICTR-assessment/`, the Github repository base directory.

    * `cd Github/`
    
3. Install the Composer dependencies listed in the `composer.json` file. *(PHP backend requirements)*

	* `composer install`

4. Copy  `.env.example` and name it `.env`.

	* `cp -a .env.example .env`

5. Create a MySQL database for the VICTR-assessment app and a corresponding user to access the created database. For example:

	* `CREATE DATABASE repository;`
	* `CREATE USER 'user'@'localhost' IDENTIFIED BY 'user';`
	* `GRANT ALL PRIVILEGES ON *.* TO 'user'@'localhost';`
	* `GRANT ALL PRIVILEGES ON db_name.* TO 'user'@'localhost';`
	* `FLUSH PRIVILEGES;`
    
6. Update the `.env` file with the new database and user credentials.

	* `DB_HOST=localhost`
	* `DB_DATABASE=db_name`
	* `DB_USER=db_user`
	* `DB_PASS=password`

7. Create the `repositories` table in the `db` that will be used to store Github repositories.

	* `php artisan migrate`

8. Point the browser to the public folder.

    * `http://localhost/Github/public/`

