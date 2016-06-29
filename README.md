 **HangManGameWebsite**
 > Project made for the 'Tri Hacker' Event at IIITA 
 
 >The website is built using XAMP and PhpMyAdmin support
 
 **Instructions**
 
>After opening XAMP interface ,Apache and Mysql services need to be started in order to see the webpages
The Signup and login page can only be accesed if a database named "dbtest" is formed in PhpMyAdmin.

>Place the contents of the repository "HangTheMan" in the htdocs folder of xamp directory in C directory then open any web browser. 

>Type "localhost/homepage.html" in place of url and navigate.

>My database table has four columns namely : user_id ,username , email , password .

The following sql commands were used for testing :

>CREATE DATABASE `dbtest` ;
>CREATE TABLE `dbtest`.`users` (
>`user_id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
>`username` VARCHAR( 25 ) NOT NULL ,
>`email` VARCHAR( 35 ) NOT NULL ,
>`password` VARCHAR( 50 ) NOT NULL ,
>UNIQUE (`email`)
>) ENGINE = MYISAM ;
