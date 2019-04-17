<?php
    include_once './script.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DGW IMS | Home</title>
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
                            <div class="navbarHome">
                                <a href="./receiving.php"><button>Receiving</button></a>
                                <a href="./workorders.php"><button>Work Orders</button></a>
                                <a href="./shipping.php"><button>Shipping</button></a>
                                <a href="./reports.php"><button>Reports</button></a>
                                
                            </div>

                            <div class="workOrders">
                                
                            </div>
                            <div class="footer">
                                    <a href=""><button class="logOut">Sign Out</button></a>
                            </div>
                            
                    </div>
                    
        </div>
</body>
</html>