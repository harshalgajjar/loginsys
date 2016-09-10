# loginsys
A basic user login framework made using PHP

#requirements
a MySQL database

#setup
1. Download all the files (login.php, admin.php, logout.php, connect.php, config.php)
2. Create a database, if you dont have.
3. Open your text editor (Notepad/TextEdit/...) to edit two files: "connect.php" and "config.php"
4. In "config.php"  
   a. Replace "localhost" (line 2) with your MySQL hostname  
   b. Replace "username" (line 3) with your MySQL username   
   c. Replace "password" (line 4) with your MySQL password  
   d. Replace "name" (line 5) with yout MySQL database name  
5. Repeat step 4, editing "connect.php" this time.
6. Upload the files (to a new folder in public_html, say 'userspace') by using your FTP account or by visiting your hosting provider's dashboard (or move them to your lamp/wamp/xampp folder)
7. Now open the file "config.php" by typing www.yourdomain.com/userspace/config.php (remember to replace "userspace" with the name of the folder you had created in public_html) in your browser's address bar, this will create a table named users to store all your usernames and passwords. 
8. Please note the new user's username and password shown in your browser window. You can of course delete the user if you want.  
  
All set! :)  
Login/Signup page: www.yourdomain.com/userspace/login.php (remember to replace "userspace" with the name of the folder you had created in public_html)

In order to edit what is shown after logging in you need to:  
1. Open "admin.php" in your text editor  
2. Search (line 11) for the division with id="login_success" (use control+F:"login_success")  
3. Add your html code in between the two comments.  
4. Additionally, one can edit the lines 25 to 28. 

#about developer
Hi there! Thanks for reading this. I'm currently an Electrical Maintenance student and am learning PHP right now. This is my first repository on GitHub. Any mistakes/suggestions/comments would be appreciated! Thanks in advance! Follow me on twitter: @harshalgajjar
