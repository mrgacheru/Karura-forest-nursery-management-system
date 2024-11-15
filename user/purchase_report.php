<?php
session_start();
if(!isset($_SESSION["user"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
?>

<?php
include "header.php";
include "connection.php";
?>

<style>.form-inline { display: flex; align-items: center; background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin-bottom: 20px; } .form-inline .form-group { margin-right: 20px; } .form-inline .form-group label { display: block; margin-bottom: 5px; font-weight: bold; color: #333; } .form-inline .form-group input { width: 200px; padding: 10px; border: 1px solid #666; border-radius: 4px; } .form-inline .btn { padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; margin-right: 10px; } .form-inline .btn-success { background-color: #5cb85c; color: white; } .form-inline .btn-success:hover { background-color: #4cae4c; } .form-inline .btn-warning { background-color: #f0ad4e; color: white; } .form-inline .btn-warning:hover { background-color: #ec971f; } /* Table Styles */ .table { width: 100%; border-collapse: collapse; margin-bottom: 20px; } .table th, .table td { padding: 10px; text-align: left; border: 1px solid #ddd; } .table th { background-color: #333; color: white; } .table tr:nth-child(even) { background-color: #f9f9f9; } .widget-content { padding: 10px; }</style>


    <div id="content" >
        <!--breadcrumbs-->
        <div id="content-header">
            <div id="breadcrumb"><a href="#" class="tip-bottom"><i class="icon-home"></i>
                    Stock Master</a></div>
        </div>
        <!--End-breadcrumbs-->
        <!--Action boxes-->
        <div class="container-fluid">

            <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;margin-left:300px;font-size:11px; margin-top:70px">
                <form class="form-inline" action="" name="form1" method="post">
                    <div class="form-group">
                        <label for="email">Select Start Date</label>
                        <input type="text" name="dt" id="dt" autocomplete="off" class="form-control" required style="width:200px;border-style:solid; border-width:1px; border-color:#666666" placeholder="click here to open calender"  >
                    </div>
                    <div class="form-group">
                        <label for="email">Select End Date</label>
                        <input type="text" name="dt2" id="dt2" autocomplete="off" placeholder="click here to open calender"  class="form-control" style="width:200px;border-style:solid; border-width:1px; border-color:#666666" >
                    </div>
                    <button type="submit" name="submit1" class="btn btn-success">Show Purchase From These Dates</button>
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
                                    <th>Purchase By</th>
                                    <th>Nursery name</th>
                                    <th>Item name</th>
                                    <th>Item unit</th>
                                    <th>Packing Size</th>
                                    <th>Item Qty</th>
                                    <th>Price</th>
                                    <th>Party Name</th>
                                    <th>Purchase Type</th>
                                    <th>Expiry Date</th>
                                    <th>Purchase Date</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $count=0;
                                $res = mysqli_query($link, "select * from purchase_master where (purchase_date>='$_POST[dt]' && purchase_date<='$_POST[dt2]')");
                                while ($row = mysqli_fetch_array($res)) {
                                    $count=$count+1;
                                    ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $row["username"]; ?></td>
                                        <td><?php echo $row["company_name"]; ?></td>
                                        <td><?php echo $row["product_name"]; ?></td>
                                        <td><?php echo $row["unit"]; ?></td>
                                        <td><?php echo $row["packing_size"]; ?></td>
                                        <td><?php echo $row["quantity"]; ?></td>
                                        <td><?php echo $row["price"]; ?></td>
                                        <td><?php echo $row["party_name"]; ?></td>
                                        <td><?php echo $row["purchase_type"]; ?></td>
                                        <td><?php echo $row["expiry_date"]; ?></td>
                                        <td><?php echo $row["purchase_date"]; ?></td></tr>
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
                                    <th>Purchase By</th>
                                    <th>Nursery name</th>
                                    <th>Item name</th>
                                    <th>Item unit</th>
                                    <th>Packing Size</th>
                                    <th>Item Qty</th>
                                    <th>Price</th>
                                    <th>Party Name</th>
                                    <th>Purchase Type</th>
                                    <th>Expiry Date</th>
                                    <th>Purchase Date</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $count=0;
                                $res = mysqli_query($link, "select * from purchase_master");
                                while ($row = mysqli_fetch_array($res)) {
                                    $count=$count+1;
                                    ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $row["username"]; ?></td>
                                        <td><?php echo $row["company_name"]; ?></td>
                                        <td><?php echo $row["product_name"]; ?></td>
                                        <td><?php echo $row["unit"]; ?></td>
                                        <td><?php echo $row["packing_size"]; ?></td>
                                        <td><?php echo $row["quantity"]; ?></td>
                                        <td><?php echo $row["price"]; ?></td>
                                        <td><?php echo $row["party_name"]; ?></td>
                                        <td><?php echo $row["purchase_type"]; ?></td>
                                        <td><?php echo $row["expiry_date"]; ?></td>
                                        <td><?php echo $row["purchase_date"]; ?></td></tr>
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



