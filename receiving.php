<?php
    include_once './script.php';
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DGW IMS | Receiving</title>
</head>
<body>
        

        <div class="content-box">
                <div class="container">
                        <div class="banner">
                            <img src="./img/logo.png" alt="">
                        </div>
                        <div class="header">
                            <h1>Inventory Management System</h1>
                        </div>
                        <div class="navbar">
                                <a href="./receiving.php"><button>Receiving</button></a>
                                <a href="./workorders.php"><button>Work Orders</button></a>
                                <a href="./shipping.php"><button>Shipping</button></a>
                                <a href="./reports.php"><button>Reports</button></a>
                                
                            </div>
                        <div class="title">
                            <h1>Receiving</h1>
                        </div>
                        <div class="recInput">

                        <form autocomplete="off" method="POST" action="./receive.php">
                        <label for="">Material</label>
                            <select name="material" id="material">
                                <?php
                                    $sql = "SELECT * FROM inventory;";
                                    $result = mysqli_query($conn,$sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if($resultCheck > 0){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            
                                            echo "<option value=".$row['id'].">".$row['dimensions']." ".$row['type']."</option>";
                                        }
                                    }
                                    
                                ?>
                            </select>
                            <label for="">Qty</label>
                            <input name="recQty" type="number">
                            <input id="recAdd" type="submit" value="Add">
                        </form>
                            <?php
                                
                            ?>
                        </div>
                        <div class="table">
                            <h3>Current Received Inventory</h3>
                            <?php
                                                        
                                                        
                                                        $sql = "SELECT * FROM receiving;";
                                                         $result = mysqli_query($conn, $sql);
                                                         $resultCheck = mysqli_num_rows($result);

                                                         if ($resultCheck > 0) {
                                                                 echo "<table>
                                                                 <tr>
                                                                     <th>ID</th>
                                                                     <th>Dimensions</th>
                                                                     <th>Type</th>
                                                                     <th>Qty</th>
                                                                     <th>Cost</th>
                                                                     <th>Supplier</th>
                                                                     
                                             
             
                                                              ";
                                                          while ($row = mysqli_fetch_assoc($result)) {
                                                                echo "<tr><td>" .$row['id']."</td><td>".$row['dimensions']."</td><td>".$row['type']."</td><td>".$row['qty']."</td><td>".$row['cost']."</td><td>".$row['supply']."</td></tr>";
                                                                
                                                          }
                                                          echo "</table>";
                                                 }
                                          ?>
                                          <form method="POST" action="./recAddInv.php">
                                            <input class="loginBtn" id="submitRec" type="submit">

                                          </form>

                            
                        </div>
                    
                    </div>
                    
        </div>

        <script src="./script.js"></script>
</body>
</html>