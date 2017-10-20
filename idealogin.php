<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta http-equiv="Content-language" content="cs">   
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="folder/css/bootstrap.css">
        <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
        <style type="text/css">
           body {
             padding-top: 5px;
           }
          #j2{
             background-color: #ffffff;
             margin-top: 20px;
           }
           .navbar-template {
             padding: 20px 15px;
            
           }
           #websiteTitle{
             font-size: 4.5em;
             vertical-align: middle;
             text-align: center;
             font-family: 'Tangerine', serif;
             padding-left: 180px;
             color :  #990099;
          }

          #websiteSlogan{
             font-size: 2.3em;
             padding-left: 140px;
             color:   #9900cc;
             font-family:"Rock Salt",cursive ;
           }

          .navbar{
            margin-left: 3px;
            margin-right: 3px;
            background-color:   #ff9999;
             color: #000000;
           }
           #c2{
               background-color:  #660066;
            color:  #cccc00;
           }
           #j1{
               background-color:   #cc00cc;
               margin-top: 27px;
           }
           #c1{
               background-color:  #660099;
               margin-top: 2px;
               margin-bottom: 8px;
           }
            a:hover{
               border:.7px double #000066;
           }
            a:hover{
               border:1px double #000066;
           }
           
 /*mobile*/
@media (max-width: 767px) {
    .slider-size {
        height: 200px;
    }
    .slider-size > img {
         width: 100%;
    }
    #websiteTitle{
         font-size:2.5em;
         padding-left: 69px;
    }
     #websiteSlogan{
        font-size: 1.5em;
        padding-left: 40px;
    }
     .two{
        padding-left: 85px;
    }
    .three{
        padding-left: 35px;
    }
}
   
/* tablets */
@media (max-width: 991px) and (min-width: 768px) {
    .slider-size {
        height: 400px;
    }
    .slider-size > img {
        width: 100%;
    }
    #websiteTitle{
         font-size:3.5em;
        padding-left: 145px;
    }
    .two{
        padding-left: 169px;
    }
    #websiteSlogan{
        font-size: 1.5em;
        padding-left: 90px;
    }
}
/* laptops */
@media (max-width: 1023px) and (min-width: 992px) {
    .slider-size {
         height:450px;
    }
    .slider-size > img {
        width: 100%;
    }
    #websiteTitle{
         font-size:3.5em;
         padding-left: 180px;
    }
    #websiteSlogan{
        font-size: 1.5em;
        padding-left: 100px;
    }
     .two{
        padding-left: 30px;
    }
}

/* desktops */
@media (min-width: 1024px) {
    .slider-size {
        height: 600px;
    }
    .slider-size > img {
        width: 100%;
    }
     #websiteTitle{
         font-size:3.5em;
        padding-left: 260px;
    }
    #websiteSlogan{
        font-size: 1.5em;
        padding-left: 190px;
    }
     .two{
       padding-left: 30px;
    }
}
        </style>
    </head>
    <body>
        <?php
        include 'config.php';
        $name = $_POST['name'];
        $pwd = $_POST['password'];
       
        $sql = "SELECT * FROM idea WHERE username LIKE '%$name%' AND password LIKE '%$pwd%' ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
              // output data of each row
        if( $row = mysqli_fetch_assoc($result)){
         ?>
        <div class="container" id="c1">
        <div class="jumbotron" id="j1">
        <div class='container' id='c2'>
        <div class='jumbotron' id="j2">
              <span id="websiteTitle">HELLO<span class='two'><?php echo $row['username'] ?></span></span>
              <p id="websiteSlogan" >welcome to your personal fund assistant</p>
        </div>
        </div>
        </div>
        </div>
        <div class="navbar navbar-default" role="navigation">
          <div class="container"> 
              <div class="navbar-header">
                           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                               <span class="sr-only"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </button>
                       </div>
                   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                          <li class="active"><a href="editidea.html">edit profile<span class="sr-only">(current)</span></a></li>
                          <li><a href="showmessages.php?id=<?php echo $name?>">messages</a></li>
                          <li><a href="idealogin.html">logout</a></li>
                      </ul>
                      <form class="navbar-form navbar-right" role="search">
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="Search">
                          </div>
                          <button type="submit" class="btn btn-default">Submit</button>
                      </form>
             </div>
           </div>
        </div>
       
        
            <?php  }
             } else {
              echo "wrong password or username try again !";
             }
            ?> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
       <script src="folder/js/bootstrap.min.js"></script>
    </body>
</html>
