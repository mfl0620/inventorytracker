<?php

include_once './script.php';

$sql = "SELECT * FROM receiving;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $qty = $row['qty'];
        $sql2 = "UPDATE inventory SET qty = qty + $qty Where id = $id;";
        $sql3 = "DELETE FROM receiving WHERE id = $id;";
        mysqli_query($conn, $sql2);
        mysqli_query($conn, $sql3);
        
    }
    
} 


header("Location: ./receiving.php");