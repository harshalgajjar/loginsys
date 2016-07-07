<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Admin</title>
    <meta type="robots" content="nofollow">
</head>
<body>
<?php if(isset($_SESSION['login']) AND $_SESSION['login'] == "success"){ //do NOT change the positions of the two conditions //checking whether user has logged in
?>
    <div id="login_success">
        
        <!-- INCLUDE ALL THE CONTENT YOU WANT TO SHOW IN THIS DIV #login_success -->
        <h1>Welcome user, <?php echo $_SESSION['username']?></h1>
        Login successful
        
        <a href="logout.php">Logout</a>
    </div>
<?php
}else{
?>
    <div id="login_failed">
        
        <!-- INCLUDE ALL THE CONTENT YOU WANT TO SHOW IF SOMEONE LANDS HERE WITHOUT BEING LOGGED IN, IN THIS DIV #login_failed -->
        <h1>Authentication failed</h1>
        Please click <a href="login.php">here</a> to login
        
    </div>
<?php
}
?>
</body>
</html>