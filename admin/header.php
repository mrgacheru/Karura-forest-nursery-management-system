<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP IMS</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
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
            box-shadow:
            box-shadow: 2px 2px 5px rgba(0,0,0,0.3), 4px 4px 10px rgba(0,0,0,0.2);
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

    <h2 style="color: white;position: absolute">
        <a href="dashboard.php" style="color:white; margin-left: 30px; margin-top: 40px">ADMIN</a>
    </h2>
</div>



<!--top-Header-menu-->


<!--sidebar-menu-->
<div id="sidebar">
    <ul>
        <li class="active">
            <a href="dashboard.php"><i class="icon icon-home"></i><span>Dashboard</span></a>
        </li>

        <li >
            <a href="add_new_user.php"><i class="icon icon-user"></i><span>Add New User</span></a>
        </li>
        <li >
            <a href="add_new_unit.php"><i class="icon icon-user"></i><span>Add New Unit</span></a>
        </li>
        <li>
            <a href="add_company.php"><i class="icon icon-user"></i><span>Add New Company</span></a>
        </li>
        <li>
            <a href="add_products.php"><i class="icon icon-user"></i><span>Add New Products</span></a>
        </li>
        <li>
            <a href="add_new_party.php"><i class="icon icon-user"></i><span>Add New Party</span></a>
        </li>
        <li>
            <a href="purchase_master.php"><i class="icon icon-user"></i><span>Purchase Master</span></a>
        </li>

        <li>
            <a href="sales_master.php"><i class="icon icon-user"></i><span>Sales Master</span></a>
        </li>


        <li class="submenu"><a href="#"><i class="icon icon-th-list"></i> <span>Reports</span><span
                    class="label label-important">+</span></a>
            <ul>
                <li><a href="purchase_report.php">Purchase Report</a></li>
                <li><a href="view_bills.php">Sales Report</a></li>
                <li><a href="stock_master.php">Stock Reports</a></li>
                <li><a href="return_product_list.php">Return Products Reports</a></li>
                <li><a href="party_report_list.php">Party Report</a></li>
                <li><a href="expiry_report.php">Expiry Report</a></li>
            </ul>
        </li>



    </ul>
</div>
<!--sidebar-menu-->
<div id="search">

    <a href="logout.php" style="color:white"><i class="icon icon-share-alt"></i><span>LogOut</span></a>

</div>