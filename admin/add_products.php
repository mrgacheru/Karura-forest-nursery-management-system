<?php
session_start();
if(!isset($_SESSION["admin"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
?>
<style>
    /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container-fluid {
    padding: 20px;
}

.row-fluid {
    background-color: white;
    min-height: 1000px;
    padding: 10px;
}

/* Widget Box Styles */
.widget-box {
    background-color: #f4f4f4;
    margin-top: 10px;
    padding: 15px; /* Reduced padding */
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.widget-title {
    background-color: #333;
    color: white;
    padding: 8px; /* Reduced padding */
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    display: flex;
    align-items: center;
}

.widget-title .icon {
    margin-right: 10px;
}

.widget-content {
    background-color: white;
    padding: 15px; /* Reduced padding */
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
}

.form-horizontal .control-group {
    margin-bottom: 10px; /* Reduced margin */
}

.form-horizontal .control-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
}

.form-horizontal .control-group .controls input,
.form-horizontal .control-group .controls select {
    width: 100%;
    padding: 8px; /* Reduced padding */
    border: 1px solid #ddd;
    border-radius: 4px;
}

.form-actions {
    text-align: center;
    padding: 10px 0; /* Adjusted padding */
}

.form-actions .btn-success {
    background-color: #5cb85c;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.form-actions .btn-success:hover {
    background-color: #4cae4c;
}

.alert {
    padding: 10px;
    margin-top: 20px;
    border-radius: 4px;
    text-align: center;
}

.alert-danger {
    background-color: #f2dede;
    color: #a94442;
    border: 1px solid #ebccd1;
}

.alert-success {
    background-color: #dff0d8;
    color: #3c763d;
    border: 1px solid #d6e9c6;
}

/* Table Styles */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    font-size:15px;
}

.table th, .table td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

.table th {
    background-color: #333;
    color: white;
}

.table tr:nth-child(even) {
    background-color: #f9f9f9;
}

.table a {
    color: inherit;
    text-decoration: none;
}

.table a:hover {
    text-decoration: underline;
}

.table .center {
    text-align: center;
}

</style>

<?php
include "header.php";
include "../user/connection.php";
?>
    <div id="content">
        <!--breadcrumbs-->
        <div id="content-header">
            <div id="breadcrumb"><a href="#" class="tip-bottom"><i class="icon-home"></i>
                    Add New Products</a></div>
        </div>
        <!--End-breadcrumbs-->
        <!--Action boxes-->
        <div class="container-fluid">
            <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;margin-left:350px;margin-top:45px">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h1>Add New Products</h1>
                        </div>
                        <div class="widget-content nopadding">
                            <form name="form1" action="" method="post" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Select Company:</label>

                                    <div class="controls">
                                        <select class="span11" name="company_name">
                                            <?php
                                            $res=mysqli_query($link,"select * from company_name");
                                            while($row=mysqli_fetch_array($res))
                                            {
                                                echo "<option>";
                                                echo $row["company_name"];
                                                echo "</option>";
                                            }


                                            ?>
                                        </select>

                                    </div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label">Enter Product Name:</label>

                                    <div class="controls">
                                       <input type="text" name="product_name" class="span11" placeholder="Enter Product Name">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Select Unit:</label>

                                    <div class="controls">
                                        <select class="span11" name="unit">
                                            <?php
                                            $res=mysqli_query($link,"select * from units");
                                            while($row=mysqli_fetch_array($res))
                                            {
                                                echo "<option>";
                                                echo $row["unit"];
                                                echo "</option>";
                                            }


                                            ?>
                                        </select>

                                    </div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label">Enter Packing Size</label>

                                    <div class="controls">
                                        <input type="text" name="packing_size" class="span11" placeholder="Enter Packing Size">
                                    </div>
                                </div>


                                <div class="alert alert-danger" id="error" style="display:none">
                                    This Products is Already Exist! Please Try Another.
                                </div>


                                <div class="form-actions">
                                    <button type="submit" name="submit1" class="btn btn-success">Save</button>
                                </div>

                                <div class="alert alert-success" id="success" style="display:none">
                                    Record Inserted Successfully!
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>company name</th>
                                <th>product name</th>
                                <th>unit</th>
                                <th>packing size</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $res = mysqli_query($link, "select * from products");
                            while ($row = mysqli_fetch_array($res)) {
                                ?>
                                <tr>
                                    <td><?php echo $row["id"]; ?></td>
                                    <td><?php echo $row["company_name"]; ?></td>
                                    <td><?php echo $row["product_name"]; ?></td>
                                    <td><?php echo $row["unit"]; ?></td>
                                    <td><?php echo $row["packing_size"]; ?></td>
                                    <td><center>
                                            <a href="edit_products.php?id=<?php echo $row["id"]; ?>" style="color:green">Edit</a></center> </td>
                                    <td>
                                        <center>
                                            <a href="delete_products.php?id=<?php echo $row["id"]; ?>" style="color:red">Delete</a>
                                        </center>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>


        </div>


    </div>


<?php
if (isset($_POST["submit1"])) {
    $count = 0;
    $res = mysqli_query($link, "select * from products where company_name='$_POST[company_name]' && product_name='$_POST[product_name]' && unit='$_POST[unit]' && packing_size='$_POST[packing_size]'") or die(mysqli_error($link));
    $count = mysqli_num_rows($res);
    if ($count > 0) {
        ?>
        <script type="text/javascript">
            document.getElementById("success").style.display = "none";
            document.getElementById("error").style.display = "block";
        </script>
        <?php
    } else {
        mysqli_query($link, "insert into products values(NULL,'$_POST[company_name]','$_POST[product_name]','$_POST[unit]','$_POST[packing_size]')") or die(mysqli_error($link));
        ?>
        <script type="text/javascript">
            document.getElementById("error").style.display = "none";
            document.getElementById("success").style.display = "block";
            setTimeout(function () {
                window.location.href = window.location.href;
            }, 3000);
        </script>
        <?php
    }
}
?>

<?php
include "footer.php";
?>