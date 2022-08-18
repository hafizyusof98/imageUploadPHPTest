<?php
   
   $data = array(
       $_POST['name'],
       $_POST['ic'],
       $_POST['date'],
       $_POST['test2']
   );
     
   // Open file in append mode
   $fp = fopen('test.csv', 'a');
     
   // Append input data to the file  
   fputcsv($fp, $data);
     
   // close the file
   fclose($fp);

   header('location:test2.php');
   ?>