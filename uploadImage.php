<?php
include "conn.php";

error_reporting(0);
 
$msg = "";


// If upload button is clicked ...
 
    $filename = $_FILES["uploadfile"]["name"];
    $type = $_FILES['uploadfile']['type'];
    $basefile = basename($filename);
    $info = pathinfo($basefile);
    $extension = $info['extension'];
    //$temp = explode(".", $_FILES["uploadfile"]["name"]);
    $newfilename = round(microtime(true));// . '.' . end($temp);
    $fname = $newfilename.'-'.$filename;
    $folder = "./image/" . $filename;
 
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO image12 (filename12,filetype12,extension12) VALUES ('$fname','$type','$extension')";
    //echo $sql;
    // Execute query
    if(mysqli_query($con,$sql)){
        if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], "./image/" . $fname)) {
            //echo "<h3>  Image uploaded successfully!</h3>";
            header ("location:index.php");
        } else {
            echo "<h3>  Failed to upload image!</h3>";
        }
    }
    else{
        //header ("location:viewIDCANTable.php?error1=error1");
        echo "ERROR: Could not able to execute" . mysqli_error($con);
    }
 
    // Now let's move the uploaded image into the folder: image
    

?>