
# Hi, I'm Htet Aung Win! 👋


## Requirements

To run and test this project,You need to install xampp.






## Deployment


After install xampp, open mysql and apache in xampp.And in cmd:

```bash
  mysql -u YOURMYSQLUSERNAME -p YOURMYSQLPWD[default=no password]
```
Your have to create database and table in mysql to test this project.

Create database:

```bash
create database DBNAME;
```
Create table in database: 
```bash
create table TABLENAME(id int primary key auto_increment,name varchar(100) not null);
```
Insert data to table:
```bash
insert into TABLENAME(name) values ("HAW");
```
After that, you can look all your database's data from mysql by
using for loop.(It all included in my project files)
## To run project's code file

In project directory:
```bash
php -S localhost:YOUR_FAVOURITE_PORT      (example-localhost:9999)
```
Upper code can run index.php file automatically and can see php website by going to browser.

In browser type:

localhost:YOUR_PORT

