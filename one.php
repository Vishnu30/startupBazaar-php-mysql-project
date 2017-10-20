c<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           include 'config.php';
           $usrname=$_POST['name'];  
           $prof=$_POST['profession'];  
           $pswrd=$_POST['password'];
           $email=$_POST['email'];
           $text=$_POST['text'];
           $amnt=$_POST['amount'];
           $cat=$_POST['category'];
           $query1="SELECT username FROM idea WHERE username ='$usrname'
                   UNION
                   SELECT username FROM presentstartup WHERE username ='$usrname'
                   UNION 
                   SELECT username FROM investor WHERE username ='$usrname'";
           $query2="SELECT email FROM idea WHERE email='$email'
                   UNION
                   SELECT email FROM presentstartup WHERE email ='$email'
                   UNION 
                   SELECT email FROM investor WHERE email ='$email'";
           $sql="INSERT into idea(username,profession,email,password,startupidea,amount,category) VALUES(' $usrname',' $prof','$email','$pswrd','$text','$amnt','$cat')";
           $r= mysqli_query($conn, $query1);
           $res= mysqli_query($conn, $query2);
           $result=mysqli_query($conn,$sql);
           if($r){
               if($res){
           if ($result) {
                   echo "<h3><font color='blue'>New record created successfully</font></h3>";
                   include 'upload1.php';
                   }
                   else{
                        echo "<h3>Error: <font color='red'>".mysqli_error($conn)."</font></h3>"."<br>";
           }}
           else{
                echo "<h3 style='color:red'>This mail  already exist try another email</h3>";
           }
                   }
           else{
               echo "<h3 style='color:red'>This username has already been taken try another username</h3>";
           }
        ?>
    </body>
</html>
