<!DOCTYPE html>
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
        $var=$_POST['var'];
        $name=$_POST['name'];
        $pwd=$_POST['password'];
        $txt=$_POST['text'];
        $sql="SELECT username FROM investor WHERE username='$name'";
        $res= mysqli_query($conn, $sql);
        if($res){
            $query="INSERT INTO mess(message,senderid,receiverid) VALUES('$txt','$name','$var')";
            $r=mysqli_query($conn, $query);
            if($r){
                echo "<h1 style='color:blue'>your message have been successfully delivered </h1>";
            }
        }
        else{
            echo "<h1 style='color:red'>your password or username does not matches any data let's try again </h1>";
        }
        ?>
    </body>
</html>
