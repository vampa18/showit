<?php

 $servername = "localhost";
 $DBUsername = "root";
 $DBPassword = "";
 $DBName = "linuxserv";


 $conn = mysqli_connect($servername, $DBUsername, $DBPassword, $DBName);


 if (!conn) {
   die("Connection failed: ".mysqli_connect_error());
 }
