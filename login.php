<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Login</title>
    <meta type="robots" content="noindex">
</head>
<body>
    
<?php
    $error="";
    if(isset($_POST['login_submit'])){ //checking if 'login' button was clicked
        $username=$_POST['username']; //storing entered data
        $password=$_POST['password']; //storing entered data
        
            include_once "connect.php"; //connecting to mysql database
            
            $sql="SELECT * FROM users WHERE username='$username' AND password='$password'"; //sql query
            $request=mysqli_query($handle,$sql); //searching for a user with given credentials in the table 'users'
            
            if(mysqli_num_rows($request) > 0){ //if user found
                //correct credentials
                $_SESSION['login'] = "success"; //using session variables to remember that user has logged in
                $_SESSION['username'] = $username; //storing username for further use (if any)
                header('Location:admin.php'); //redirecting user to admin page
                mysqli_close($handle); //closing MySQL connection  
            } else{
                //wrong credentials
                $error="Wrong username and/or password"; //storing error in error variable to output on screen
            }
            
        }
    
?>
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    
    Username:<input type="text" name="username" /><br />
    Password:<input type="password" name="password" /><br />
    <input type="submit" name="login_submit" value="Login"/><br />
    <?php echo $error; // showing error (if any)?>
    
    </form>

</body>
</html>