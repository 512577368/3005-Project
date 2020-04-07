Yankai Gao 101029196
Kaiwen Mao 101048300

How to run:
Our project is a web-based server written by php language. 
In order to run this application, php enviornment and Mysql is needed.

Skip this part if enviornment is already setted:
	1. Download XAMPP (XAMPP has the enviornment for php and MySQL. Please be careful if you already have MySQL installed, since there might be port conflict)
	2. Install XAMPP
	3. Go to XAMPP/htdocs
	4. Put "book_store" fildholder and "book_store.sql" in
	5. Open XAMPP, start "Apache" and "MySQL" server (Apache runs on 80 and MySQL runs on 3306 by default)
	6. Open Admin of MySQL
	7. Use "root" as username and leave password as blank, then login
	8. Click "User accounts", then click "New" at left side
	9. Name the database "book_store"
	10. Click on "book_store" database, click "Import"
	11. Click browse, then choose "book_store.sql", then import
	12. Now the information should be in database 

13. Open another window, go to "localhost/book_store", the application should run properly
14. Informations about accounts, orders and books can be found in database
