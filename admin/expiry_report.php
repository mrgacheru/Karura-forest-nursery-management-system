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

            <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px; margin-left:350px;margin-top:45px;">
            <h1>Expiry Report</h1>    
            <form class="form-inline" action="" name="form1" method="post">
                    <div class="form-group">
                        <label for="email">Select Start Date</label>
                        <input type="text" name="dt" id="dt" autocomplete="off" class="form-control" required style="width:200px;border-style:solid; border-width:1px; border-color:#666666" placeholder="click here to open calender"  >
                    </div>
                    <div class="form-group">
                        <label for="email">Select End Date</label>
                        <input type="text" name="dt2" id="dt2" autocomplete="off" placeholder="click here to open calender"  class="form-control" style="width:200px;border-style:solid; border-width:1px; border-color:#666666" >
                    </div>
                    <button type="submit" name="submit1" class="btn btn-success">Show Sales From This Company</button>
                    <button type="button" name="submit2" class="btn btn-warning" onclick="window.location.href=window.location.href">Clear Search</button>
                </form>

                <br>

                <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">

                <div class="span12">

                    <div class="widget-content nopadding">

                        <?php
                        if(isset($_POST["submit1"]))
                        {
                            ?>
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Nursery name</th>
                                    <th>Item name</th>
                                    <th>Item unit</th>
                                    <th>Packing Size</th>
                                    <th>Item Qty</th>
                                    <th>Price</th>
                                    <th>Party Name</th>
                                    <th>Purchase Type</th>
                                    <th>Expiry Date</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $count=0;
                                $res = mysqli_query($link, "select * from purchase_master where (expiry_date>='$_POST[dt]' && expiry_date<='$_POST[dt2]') order by expiry_date desc");
                                while ($row = mysqli_fetch_array($res)) {
                                    $count=$count+1;
                                    ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $row["company_name"]; ?></td>
                                        <td><?php echo $row["product_name"]; ?></td>
                                        <td><?php echo $row["unit"]; ?></td>
                                        <td><?php echo $row["packing_size"]; ?></td>
                                        <td><?php echo $row["quantity"]; ?></td>
                                        <td><?php echo $row["price"]; ?></td>
                                        <td><?php echo $row["party_name"]; ?></td>
                                        <td><?php echo $row["purchase_type"]; ?></td>
                                        <td><?php echo $row["expiry_date"]; ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                            <?php
                        }
                        else{
                            ?>
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Nursery name</th>
                                    <th>Item name</th>
                                    <th>Item unit</th>
                                    <th>Packing Size</th>
                                    <th>Item Qty</th>
                                    <th>Price</th>
                                    <th>Party Name</th>
                                    <th>Purchase Type</th>
                                    <th>Expiry Date</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $count=0;
                                $res = mysqli_query($link, "select * from purchase_master order by expiry_date desc");
                                while ($row = mysqli_fetch_array($res)) {
                                    $count=$count+1;
                                    ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $row["company_name"]; ?></td>
                                        <td><?php echo $row["product_name"]; ?></td>
                                        <td><?php echo $row["unit"]; ?></td>
                                        <td><?php echo $row["packing_size"]; ?></td>
                                        <td><?php echo $row["quantity"]; ?></td>
                                        <td><?php echo $row["price"]; ?></td>
                                        <td><?php echo $row["party_name"]; ?></td>
                                        <td><?php echo $row["purchase_type"]; ?></td>
                                        <td><?php echo $row["expiry_date"]; ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                            <?php
                        }
                        ?>




                    </div>

                </div>
            </div>


        </div>


    </div>




<?php
include "footer.php";
?>



