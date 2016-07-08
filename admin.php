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
        
        <!-- EDIT THE LINES BELOW, content below is shown to users who have logged in -->
        <h1>Welcome user, <?php echo $_SESSION['username']?></h1>
        Login successful
        <!-- STOP EDITING -->
        
    <a href="logout.php">Logout</a>
    </div>
<?php
}else{
?>
    <div id="login_failed">
        
        <!-- EDIT THE LINES BELOW, content below is shown to users accidently land to this page without logging in -->
        <h1>Authentication failed</h1>
        Please click <a href="login.php">here</a> to login
        <!-- STOP EDITING -->
        
    </div>
<?php
}
?>
</body>
</html>