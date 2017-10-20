<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-language" content="cs">   
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="folder/css/bootstrap.css">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
        <style type="text/css"> 
 
    .carousel-caption {
      font-family:'Kaushan Script', cursive;
    }
    .carousel-inner>.item>img,.carousel-inner>a>.item>img
    {
        height:400px;
        width:723px;
        margin-top: 10px;
    }
   .container {
     background-color: #fff;
     -webkit-animation: random 5s infinite;
     animation: random 5s infinite;
     height:420px;
     margin-top: 10px;
     width:730px;
 }
 p{
    color:  #000000;
 }
 #one{
     background-image: none;
    position:absolute;
    top : 0;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-align: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
    height: 100%;
    padding-left: 60px;
 }
@keyframes  random {
    15% { background-color: #ff9900; } 
    30% { background-color: #99cc00; } 
    45% { background-color: #3366ff ; } 
    60% { background-color: #ffff66; }
    75% { background-color:  #00ccff  ; }  
}
@media (max-width: 767px) {
    .slider-size {
        height: 300px;
    }
    .slider-size > img {
         width: 400px;
    }
    .carousel-inner>.item>img{
        height:300px;
        margin-top: 10px;
    }
    .container{
        height:320px;
        width:420px;
    }
    
}
 
</style> 
    </head>
    <body>
        <?php
        include 'config.php';
        $cat=$_GET['var'];
        $sql = "SELECT * FROM idea 
               WHERE category LIKE '%$cat%'
               UNION 
               SELECT * FROM presentstartup
               WHERE category LIKE '%$cat%'";
        $result = mysqli_query($conn, $sql); 
        $count= mysqli_num_rows($result); 
        for($i=0;$i<$count;$i++){
             $car[$i]='carousel'.$i;
        }
        if(mysqli_num_rows($result)>0){
            while($row= mysqli_fetch_assoc($result)){
                $var=trim($row['username']);
                $query="select * from pictures where id ='$var'";
                $res= mysqli_query($conn, $query);
                $desc=$row['startupidea'];
                $slides='';
                $Indicators='';
                $counter=0;
                if(mysqli_num_rows($res)>0){ 
                while($ro= mysqli_fetch_assoc($res)){  
                $image = $ro['URL'];
            if($counter == 0)
            {
            if(!empty($desc)){    
            $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'" class="active"></li>';
            $slides .= '<div class="item active">
            <img src="folder/images/bc1.jpg" />
            <div class="carousel-caption" id="one">
            <h1>'.$desc.'.</h1>         
            </div>
            </div>';}
            else
            {
            $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'" class="active"></li>';
            $slides .= '<div class="item active">
            <img src="folder/images/bc1.jpg" />
            <div class="carousel-caption" id="one">
            <p> this startup belongs to '.$cat.' CATEGORY</p>         
            </div>
            </div>' ;
            } }
          else b:
         {
            $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'"></li>';
            $slides .= '<div class="item">
            <img src="uploads/'.$image.'" id="image" />
            <div class="carousel-caption">
            <p><a href="message.php?variable='.$var.'" class="btn btn-primary"  role="button"  >Contact US</a></p>
            </div>
          </div>'; 
         
        }
        if($counter=0){
         goto b;   
        }
        else{
        $counter++;}
        } 
        }
        ?>
        <div class="container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
         <?php echo $Indicators; ?>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        <?php echo $slides; ?>  
        </div>
        </div>
        </div><br><br>
                <?php }}
         else{
            echo '<h1>no data is available right now</h1>';
        }?>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="folder/js/bootstrap.min.js"></script>   
    </body>
</html>
