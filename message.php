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
        <title></title>
        <link rel="stylesheet" type="text/css" href="folder/css/bootstrap.css">
         <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
        <style type="text/css">
            body{
                background: url('folder/images/b2.jpg');
                position: absolute;
            }
            .col-form-label{
                color:#ffffff;
                font-size: 2em;
                font-family: "Tangerine",serif;
            }  
            .container{
            border:1px solid #ffffff;
            margin-top: 20px;
            margin-bottom: 20px;
            padding-top: 20px;
            margin-left: 80px;
            padding-left: 50px;
            padding-right: 50px;
            }
             @media (max-width: 767px) {
                .btn{
                margin-left: 100px;
                margin-bottom: 30px;
            }
            .dropdown{
                    float: right;
                }
            }
            @media (max-width: 991px) and (min-width: 768px) {
                .btn{    
                margin-left:280px;
                margin-bottom:20px;
            }
            .dropdown{
                    float: right;
                }
            }
            @media (max-width: 1023px) and (min-width: 992px) {
                .btn{
                margin-left:390px;
                margin-bottom:20px;
                }
                .dropdown{
                    float: right;
                }
            }
            @media (min-width: 1024px) {
            .btn{
                margin-left: 500px;
                margin-bottom: 20px;
            }
            .dropdown{
                    float: right;
                }
            .password .glyphicon,.glyphicon {
            display:none;
            right: 30px;
            position: absolute;
            top: 12px;
            cursor:pointer; 
               }    
        </style>
    </head>
    <body>
        <?php
       $var=$_GET['variable'];
        ?>
          <div class="container">
                <form  id="Form" action="message2.php" method="post"  enctype="multipart/form-data">
                <input type='hidden' name='var' value='<?php echo "$var";?>'/>      
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="name">UserName:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" placeholder="Enter your username" required="required"   name="name">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="pwd">Password:</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" required="required"   name="password"><span class="glyphicon glyphicon-eye-open"></span>
                    </div>
                    </div>
                    <div class="form-group row"> 
                    <label class="col-sm-2 col-form-label" for="comment">Your Message:</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" rows="8" id="comment"  placeholder="type here" required="required" name="text"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" >Submit</button>
                  <a href="investor.html" class="pull-right"  role="button" > Need user?SIGN UP!</a> <span class="clearfix"></span>
                </form>
          </div>    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="folder/js/bootstrap.min.js"></script>
 <script>
  $("#pwd").on("keyup",function(){
    if($(this).val())
        $(".glyphicon-eye-open").show();
    else
        $(".glyphicon-eye-open").hide();
    });
$(".glyphicon-eye-open").mousedown(function(){
                $("#pwd").attr('type','text');
            }).mouseup(function(){
            	$("#pwd").attr('type','password');
            }).mouseout(function(){
            	$("#pwd").attr('type','password');
            });   
 </script>
    </body>
</html>
