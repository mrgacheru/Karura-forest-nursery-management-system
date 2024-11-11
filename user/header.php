<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP IMS</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="purchase_master.css">
    <link rel="stylesheet" href="purchase_report.css">
    <link rel="stylesheet" href="sales_master.css">
    
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Header Styles */
        #header {
            background-color: brown;
            color: black;
            position: fixed;
            width: 100%;
            top: 0;
            padding: 20px 0;
            text-align: center;
            z-index: 1000;
            height:40px;
            display:flex;
            justify-content:space-between;
        }

        #header a {
            color: white;
            margin-left: 30px;
            text-decoration: none;
            font-size: 1.5em;
        }

        /* Sidebar Styles */
        #sidebar {
            position: fixed;
            top: 70px; /* Adjust this based on your header height */
            left: 0;
            width: 200px;
            height: calc(100% - 70px); /* Adjust this based on your header height */
            background-color: #fff;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            background-color: beige;
        }

        #sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #sidebar ul li {
            margin: 10px 0;
        }

        #sidebar ul li a {
            text-decoration: none;
            color: #333;
            display: block;
            padding: 10px;
            border-radius: 4px;
        }

        #sidebar ul li a:hover, #sidebar ul li.active a {
            background-color: #e9e9e9;
        }

        /* User Nav Styles */
        #user-nav {
            margin-top: 70px; /* Align with header height */
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        #user-nav .nav {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        #user-nav .nav li {
            margin: 0 10px;
        }

        #user-nav .nav a {
            color: white;
            text-decoration: none;
        }

        /* Main Content Styles */
        .main-content {
            margin-left: 220px; /* Adjust based on your sidebar width */
            padding: 20px;
            margin-top: 90px; /* Adjust based on your header and user nav height */
        }

        /* Footer Styles */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        footer p {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>

<div id="header">
    <h3 style="position: absolute">
        <a href="#">USER PANEL</a>
        
    </h3>
    <div><ul class="dropdown-menu" style="margin-left:1000px;color:black";>
                <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
            </ul></div>
    
    
</div>


<!--top-Header-menu-->


<!--sidebar-menu-->
<div id="sidebar">
    <ul>
        <li class="active">
            <a href="dashboard.php"><i class="icon icon-home"></i><span>Dashboard</span></a>
        </li>
        <li>
            <a href="purchase_master.php"><i class="icon icon-home"></i><span>Purchase Product</span></a>
        </li>
        <li>
            <a href="sales_master.php"><i class="icon icon-home"></i><span>Sales Master</span></a>
        </li>
        <li>
            <a href="purchase_report.php"><i class="icon icon-home"></i><span>Purchase Report</span></a>
        </li>
        <li>
            <a href="view_bills.php"><i class="icon icon-home"></i><span>Sales Report & Return Products</span></a>
        </li>
        <li>
            <a href="stock_master.php"><i class="icon icon-home"></i><span>Stock Master</span></a>
        </li>
        <li>
            <a href="return_product_list.php"><i class="icon icon-home"></i><span>Return Product Lists</span></a>
        </li>
    </ul>
</div>

<!-- Main Content -->


<!-- Footer -->
<footer>
    <p>&copy; 2024 Karura Forest Nursery Management System. All Rights Reserved.</p>
</footer>

</body>
</html>
