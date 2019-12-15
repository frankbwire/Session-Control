    PHP SESSION
   -------------
author - frankline bwire.

.........................
An alternative way to make data accessible across the various pages of an entire website is to use a PHP Session. A session creates a file in a temporary directory on the server where registered session variables and their values are stored. This data will be available to all pages on the site during that visit.

This project illustrates more about sessions by using a login system.

Files:

--session.sql

This is the project database. Import to server, no need of creating a new database.

--connect.php

A PHP session is easily started by making a call to the session_start() function. This function first checks if a session is already started and if none is started, then it starts one.

--index.php

Login in and assign a Variable to a session. In this case
" $_SESSION["id"]=$id; "

Also Register a new user into the system.

--home.php

Get details the users logged into the system by getting the session values. First check if a session is started " if(isset($_SESSION['id'])) "

Then assign session value to a variable " $user=$_SESSION['id'] "
