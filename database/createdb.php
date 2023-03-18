<?php
$a = mysqli_connect("localhost","root","");# mysqli_connect(host, username,password, dbname, port, socket)
$b = "Create database carrental";
$c = mysqli_query($a,$b);   #mysqli_query(connection, query,resultmode(optional))


?>