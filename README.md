CSCI 5560 - Homework 6

Matthew I. Swindall


In order to use this database interface, you must have a MySQL server installed along with a PHP server 
on Windows 10 or later. These Instructions assume MySQL is already installed and the
SUPPLIER-PART-SHIPMENT database has been created.

Below are links where the necessary servers can be downloaded along with installation instructions:

	MySQL Server:			<a href='https://www.mysql.com/'>https://www.mysql.com/<\a>
	XAMPP Server (Windows):		<a href='https://www.apachefriends.org/'>https://www.apachefriends.org/<\a>

For information on configuring XAMPP see:
	https://www.geeksforgeeks.org/how-to-set-php-development-environment-in-windows/?ref=lbp

Additional PHP servers exist for other operating systems including:
	LAMP - For Linux:	https://bitnami.com/stack/lamp/installer
	MAMP - For Mac OS:	https://www.mamp.info/en/downloads/

The source code for this web interface is available at https://github.com/mis2n/Database_HW6

Once the XAMPP and MySQL servers are installed and running, copy the application repository into the
XAMPP directory: /xampp/htdocs/	

You will need to update the file config.inc.example by inserting the servername (most likely 'localhost'), the 
MySql username (typically 'root'), the database name used, and the root password for the database. You must
then remove ".example" from the end of the file name.

	For Example "config.inc.example" becomes "config.inc"

Once these credentials are saved in the configuration file, you may access the interface by navigating
to "localhost/Database_HW6/index.php" in your browser. 

To execute the program, simply click on of the submit buttons below the desired query. The query will
be executed and the results displayed. If an error occurs, an error message will be displayed along with 
the associated table. Each screen includes a "Main Menu" button for navigation back to the landing page.

The video demonstration can be found at: https://youtu.be/lWp5RBAq2qg
