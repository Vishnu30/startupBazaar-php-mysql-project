<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta http-equiv="Content-language" content="cs">   
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="folder/css/bootstrap.css">
         </head>
    <body>
<?php
include 'config.php';
$name=$_GET["id"];
 $sql="SELECT * FROM mess WHERE receiverid='$name'";
        $res= mysqli_query($conn, $sql);
  if($res){  ?>     
  <div class="container">
  <h2 class="center-block">Messages</h2>        
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Message</th>
        <th>From</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php  while($result= mysqli_fetch_assoc($res)){?>
      <tr>
        <td><?=$result['message']?></td>
        <td><?=$result['senderid']?></td>
        <td><a href='message.php'>message</a></td>
      </tr>
    <?php }?>
    </tbody>
  </table>
</div>
                     
       <?php
        }
        else{
            echo "<h1 style='color:red'>you don't have any messages right now  </h1>";
        }

?>
    </body>
</html>

