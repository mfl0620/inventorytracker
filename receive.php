<?php

include_once './script.php';

$id = $_POST['material'];

$recQty = $_POST['recQty'];

$sql = "SELECT id FROM receiving WHERE id = $id;";
$result = $conn->query($sql);
$res = mysqli_fetch_assoc($result);



$sql1 = "insert into receiving(id, dimensions, type, cost, supply) select id, dimensions, type, cost, supply from inventory where id = $id;";

$sql2 = "UPDATE receiving SET qty = $recQty WHERE id = $id;";

if($id==$res['id']){
    
    mysqli_query($conn, $sql2);
}else{
    mysqli_query($conn, $sql1);
    mysqli_query($conn, $sql2);
}




header("Location: ./receiving.php");