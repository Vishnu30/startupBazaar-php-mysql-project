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
    $var=$_POST['variable']; 
    echo $var;
    $ql="SELECT * FROM idea 
         WHERE category LIKE '%$var%'
         UNION 
         SELECT * FROM presentstartup
         WHERE category LIKE '%$var%'";
    $r=mysqli_query($conn,$sq);
    if(mysqli_num_rows($r)>0){
        if($rows= mysqli_fetch_assoc($r)){
            $name=$rows['username'];
        }
    }
    mysqli_query($conn,"INSERT INTO mess(id,messages) VALUES ('$name','person')");
    ?>
    </body>
</html>
