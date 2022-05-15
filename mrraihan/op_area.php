<?php
      $name=$_GET['aname'];
      $code=$_GET['pcode'];
      $driver=$_GET['did'];
      
      include "./auth.php";

      $sql="INSERT INTO area(area_name,postal_code,d_id) VALUES ('$name', '$code', '$driver');";
      echo $sql;
      
      if (mysqli_query($conn, $sql)) {
        echo " hoise ";

    } else {
        echo "Error: " . $sql. ":-" . mysqli_error($conn);
    }
    header("Location: ./add_area.php");
?>
