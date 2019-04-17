<?php

include_once './script.php';

$id = $_POST['woSelect'];

$qty = $_POST['woQty'];

$sql = "SELECT * FROM workorders WHERE name = $id;";
$result = $conn->query($sql);
$res = mysqli_fetch_assoc($result);



$sql1 = "insert into workorders(id, name, customer) select id, name, customer from productlist where id = $id;";

$sql2 = "UPDATE workorders SET qty = $qty WHERE id = $id;";

$sql3 = "UPDATE workorders SET statusInd = 'red' WHERE id = $id;";

if($id==$res['id']){
    
    mysqli_query($conn, $sql2);
    mysqli_query($conn, $sql3);
}else{
    mysqli_query($conn, $sql1);
    mysqli_query($conn, $sql2);
    mysqli_query($conn, $sql3);
}




header("Location: ./workorders.php");