<?php
$db_host="localhost"; //database hostname
$db_username="username"; //database username
$db_password="password"; //database password
$db_name="name";

$handle=mysqli_connect("$db_host","$db_username","$db_password","$db_name"); //creating a handle

if(!$handle){
    die("Failed to connect to the given database host, error: " . mysqli_error($handle));
} else{
    echo "Connected to given database host <br/>";
}

$sql="CREATE TABLE `$db_name`.`users` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `username` TINYTEXT NOT NULL , `password` VARCHAR(50) NOT NULL , `joined` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

if(!mysqli_query($handle,$sql)){
    die("Failed to create table named users, error: " . mysqli_error($handle));
} else{
    echo "Table successfully created <br />";
}

$sql="INSERT INTO users (username,password) VALUES ('loginsys','admin')";

if(!mysqli_query($handle,$sql)){
    die("New user creation failed, error: " . mysqli_error($handle));   
} else{
    echo "A new user has been created: username='loginsys' and password='admin' <br /><br />";
    echo "All went well! Congrats, the setup is now complete!";
}

mysqli_close($handle);
?>