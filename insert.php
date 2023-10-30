
<?php
    // include="connect.php";
    // if($conn){
    //     echo "Connection Successful!";
    // }else{
    //     echo "Failed!!";
    // }
$hostname="localhost";
$username="root";
$password="";
$databaseName="zeeshan";

$item=$POST['item'];
 $name=$POST['name'];
 $phone=$POST['phone'];
 $address=$POST['address'];
 
   $connect=mysqli_connect($item,$name,$phone,$address)
   $query=INSERT INTO `students`(`item`, `name`, `phone`, `address`) VALUES ('$item','$name','$phone','$address');
   $result=mysqli_query($connect,$query);
   if($result){
    echo "Data Inserted";
   }else{
    echo "Data not Inserted"
   }
  mysqli_free_result($result);
  mysqli_close($connect);
?>