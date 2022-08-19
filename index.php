<!DOCTYPE html>
<html>
 
<head>
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
    <div id="content">
        <form method="POST" action="uploadImage.php" enctype="multipart/form-data">
            <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" value="" required/>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
            </div>
        </form>
    </div>
    <div id="display-image">
    <?php
        include "conn.php";

        $query = " select * from image12 ";
        $result = mysqli_query($con, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
    ?>
        <!--<a href="download.php?path=image/<//?php echo $data['filename12']; ?>"><img src="./image/<//?php echo $data['filename12']; ?>"></a>-->
        <a href="download.php?path=D:/Installer/<?php echo $data['filename12']; ?>"><?php echo (explode('-',$data['filename12']))[1];?></a>-----<?php echo $data['filetype12'];?><br/>
 
    <?php
        }
    ?>
    <br/><a href="test2.php">Upload data to excel</a>
    </div>
</html>