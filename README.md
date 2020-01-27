# PHP Local Server #

in this project we are going to illustrate the following tasks to deal with __php.ini__ file.

## list of tasks ##
1. install the XAMPP, and run Apache and MySQL server. 
2. create project folder in c:\xampp\htdocs\phplocalserver 
3. check your php file in the browser. 
```
<?php 
echo "hello world";
?>
```
4- check your php version 

in this project we need php higher than 7.1.3 

```
echo "current php version " . phpversion();
```
5- change time zone to Madrid
```
date_default_timezone_set("Europe/Madrid");
```

6- Maximize the execuation time

to retrive current execuation time need to write this line fo code
```
ini_get('max_execution_time'));
```

to change the current maximum execuation time you need to write
```
ini_set('max_execution_time', 130);
```
7- enable extension

To enable any extension, you should remove semicolon (;) from its beginning.

8- Add comment to php.ini file

it is just required to type semicolon infront of any line.


## The End
__ By Mani Tahriri
