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
        <style type="text/css">
            .one{
                color: #ff0000;
            }
        </style>
    </head>
    <body>
        <?php
$valid_formats = array("jpg", "png", "gif", "zip", "bmp");
$max_file_size = 1024*1000; //100 kb
$path = "uploads/"; // Upload directory
$count = 0;
$count1= 0;

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
	// Loop $_FILES to exeicute all files
	foreach ($_FILES['files']['name'] as $f => $name) {  
	    if ($_FILES['files']['error'][$f] == 4) {
	        continue; // Skip file if any error found
	    }
      	   if ($_FILES['files']['error'][$f] == 0) {	           
	        if ($_FILES['files']['size'][$f] > $max_file_size) {
	            $message[] = "$name is too large!.";
	            continue; // Skip large files
	        }
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
                             
                                 $message[] = "$name is not a valid format";
				continue; // Skip invalid file formats
                        }
	        else{ // No error found! Move uploaded files 
                   $value= implode($_FILES['files']['name']); 
                   if(file_exists($path.$value)){
                   $count1++;   }
                   else{
                   if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name)){    
                   $count++;
                   include 'config.php';
                   $sql="INSERT into pictures (id,URL) VALUES('$usrname','$name')";
                   $result=mysqli_query($conn,$sql);
                   if ($result) {
                   echo " ";
                   } else {
                   echo "<h3>Error:<font color='red'><b> " .mysqli_error($conn)."</b></font></h3>"."<br>";
                   }
                    }
                }
	    }
	}
}
}
        ?>
 <h3 class="one"><?php echo $count1; ?> files are already present</h3> 
 <h3>successfully uploaded <?php echo $count ?> files</h3>
    </body>
</html>
