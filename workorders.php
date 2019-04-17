<?php
    include_once './script.php';
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DGW IMS | Work Orders</title>
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
                    <div class="workOrders">
                        <h1>Work Orders</h1>
                        <div class="recInput">
                        <form method="POST" action="./addWo.php">
                            <label for="">Item</label>
                            <select name="woSelect" id="woSelect">
                            <?php
                                    $sql = "SELECT * FROM productlist;";
                                    $result = mysqli_query($conn,$sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if($resultCheck > 0){
                                        while ($row = mysqli_fetch_assoc($result)){
                                            
                                            echo "<option value=".$row['id'].">".$row['name']."</option>";
                                        }
                                    }
                                    
                                ?>
                            </select>
                            <label for="">Qty</label>
                            <input name="woQty" type="number">
                        <input id="addNew" value="+ Add New" class="loginBtn" type="submit">
                        </form>

                        </div>
                        
                        <div class="woTable table">
                            <h3>Pending Work Orders</h3>
                            <div class="woStatus">
                               <div class="red"></div> <p>Incomplete</p>
                               <div class="green"></div> <p>Complete</p>
                            </div>
                            
                            <?php
                                                        
                                                        
                                                        $sql = "SELECT * FROM workorders;";
                                                         $result = mysqli_query($conn, $sql);
                                                         $resultCheck = mysqli_num_rows($result);

                                                         if ($resultCheck > 0) {
                                                                 echo "<table>
                                                                 <tr>
                                                                    <th></th>
                                                                     <th>Item</th>
                                                                     <th>Qty</th>
                                                                     <th>Customer</th>
                                                                     
                                                                     
                                             
             
                                                              ";
                                                          while ($row = mysqli_fetch_assoc($result)) {
                                                                echo "<tr><td class=".$row['statusInd']."></td><td>".$row['name']."</td><td>".$row['qty']."</td><td>".$row['customer']."</tr>";
                                                                
                                                          }
                                                          echo "</table>";
                                                 }
                                          ?>
                                          <form method="POST">
                                            <input value="Ship" class="loginBtn" id="submitRec" type="submit">

                                          </form>
                        </div>
                    </div>
                    </div>
                    
        </div>
    <script src="./script.js"></script>
</body>
</html>