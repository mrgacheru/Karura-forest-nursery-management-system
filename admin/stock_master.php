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
    /* Overall styling */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

/* Container styling */
.row-fluid {
  margin-left: 0;
}

.span1, .span2, .span3, .span4, .span11, .span12 {
  float: left;
  margin-left: 10px;
}

/* Widget box styling */
.widget-box {
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 5px;
  padding: 20px;
  margin-bottom: 20px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

.widget-title {
  padding: 10px;
  border-bottom: 1px solid #ddd;
}

.widget-title h5 {
  text-transform: uppercase;
  font-size: 16px;
  margin: 0;
  color: #333;
  font-weight: bold;
}

.widget-content {
  padding: 15px;
}

/* Form styling */
.form-inline .form-group {
  margin-bottom: 10px;
}

.form-inline .form-control {
  width: 200px;
  padding: 10px;
  border-radius: 4px;
  border: 1px solid #ccc;
}

.form-inline .btn {
  padding: 10px 20px;
  font-size: 14px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.form-inline .btn:hover {
  background-color: #0069d9;
}

/* Table styling */
table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
}

th, td {
  padding: 10px;
  border-bottom: 1px solid #ddd;
  text-align: left;
}

th {
  background-color: #f1f1f1;
  font-weight: bold;
  color: #333;
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
                    Stock Master</a></div>
        </div>
        <!--End-breadcrumbs-->
        <!--Action boxes-->
        <div class="container-fluid">
            <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;margin-left:350px;margin-top:45px;">
                
            <div class="span12">

                    <div class="widget-content nopadding">
                        <h1>stocks report</h1>
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Sr No</th>
                                <th>Product Company</th>
                                <th>Product Name</th>
                                <th>Product Unit</th>
                                <th>Product Qty</th>
                                <th>Product Selling Price</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $count=0;
                            $res = mysqli_query($link, "select * from stock_master");
                            while ($row = mysqli_fetch_array($res)) {
                                $count=$count+1;
                                ?>
                                <tr>
                                    <td><?php echo $count; ?></td>
                                    <td><?php echo $row["product_company"]; ?></td>
                                    <td><?php echo $row["product_name"]; ?></td>
                                    <td><?php echo $row["product_unit"]; ?></td>
                                    <td><?php echo $row["product_qty"]; ?></td>
                                    <td><?php echo $row["product_selling_price"]; ?></td>
                                    <td><center>
                                            <a href="edit_stock_master.php?id=<?php echo $row["id"]; ?>" style="color:green">Edit</a></center> </td>

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
include "footer.php";
?>